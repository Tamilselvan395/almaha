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

            if ($blog->wasChanged('slug') || $blog->wasRecentlyCreated) {
                Artisan::call('sitemap:generate');
            }
        });

        static::deleted(function () {
            Artisan::call('sitemap:generate');
        });
    }
}
