<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\MetaDetailTable;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share([
            'meta_details' => MetaDetailTable::where('status', true)->first(),
            'categorys' => Category::get(),
        ]);
    }
}
