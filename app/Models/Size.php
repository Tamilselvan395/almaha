<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Artisan;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'width',
        'height',
        'label',
        'slug',
        'status',
        'orderby',

    ];

    protected static function booted()
    {
        static::saved(function ($size) {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on size save: ' . $e->getMessage());
            }
        });

        static::deleted(function () {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on size delete: ' . $e->getMessage());
            }
        });
    }
}
