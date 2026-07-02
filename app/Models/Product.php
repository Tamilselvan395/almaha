<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'tile_model_id',
        'color_id',
        'size_id',
        'name',
        'description',
        'slug',
        'tiles_code',
        'type_of_product',
        'look',
        'price',
        'image',
        'brochure_pdf',
        'meta_title',
        'meta_description',
        'status',
        'orderby',
    ];

    
    protected $casts = [
        'image' => 'array',
        'status' => 'boolean',
    ];

    public function tile_model()
    {
        return $this->belongsTo(TileModel::class, 'tile_model_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class,'feature_product','product_id','feature_id');
    }

    protected static function booted()
    {
        static::saved(function ($product) {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on product save: ' . $e->getMessage());
            }
        });

        static::deleted(function () {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on product delete: ' . $e->getMessage());
            }
        });
    }
}
