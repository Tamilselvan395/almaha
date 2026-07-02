<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'pdf_image',
        'description',
        'meta_title',
        'meta_description',
        'status',
        'orderby',
    ];

    public function tiles_model()
    {
        return $this->hasMany(TileModel::class);
    }

    protected static function booted()
    {
        static::saved(function ($category) {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on category save: ' . $e->getMessage());
            }
        });

        static::deleted(function () {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on category delete: ' . $e->getMessage());
            }
        });
    }
}
