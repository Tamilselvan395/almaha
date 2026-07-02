<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Blog extends Model
{
    protected $fillable = ['title', 'short_description', 'long_description', 'image', 'slug', 'meta_title', 'meta_description', 'status'];

    protected static function booted()
    {
        static::saved(function ($blog) {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on blog save: ' . $e->getMessage());
            }
        });

        static::deleted(function () {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on blog delete: ' . $e->getMessage());
            }
        });
    }
}
