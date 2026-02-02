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

            if ($category->wasChanged('slug') || $category->wasRecentlyCreated) {
                Artisan::call('sitemap:generate');
            }
        });

        static::deleted(function () {
            Artisan::call('sitemap:generate');
        });
    }
}
