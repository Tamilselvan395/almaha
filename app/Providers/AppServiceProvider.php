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
        if (app()->runningInConsole() && !app()->runningUnitTests()) {
            return;
        }

        view()->composer('*', function ($view) {
            $view->with([
                'meta_details' => \Illuminate\Support\Facades\Schema::hasTable('meta_detail_tables') 
                    ? MetaDetailTable::where('status', true)->first() 
                    : null,
                'categorys' => \Illuminate\Support\Facades\Schema::hasTable('categories') 
                    ? Category::get() 
                    : collect(),
            ]);
        });
    }
}
