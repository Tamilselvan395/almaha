<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;


class TileModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'status',
        'orderby',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected static function booted()
    {
        static::saved(function ($tilemodel) {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on tilemodel save: ' . $e->getMessage());
            }
        });

        static::deleted(function () {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on tilemodel delete: ' . $e->getMessage());
            }
        });
    }
}
