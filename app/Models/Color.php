<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Artisan;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hex_code',
        'image',
        'slug',
        'status',
        'orderby',

    ];

    protected static function booted()
    {
        static::saved(function ($color) {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on color save: ' . $e->getMessage());
            }
        });

        static::deleted(function () {
            try {
                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                \Log::error('Sitemap generation failed on color delete: ' . $e->getMessage());
            }
        });
    }
}
