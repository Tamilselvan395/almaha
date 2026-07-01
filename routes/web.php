<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.submit');

Route::get('/categories', [PageController::class, 'categories'])->name('categories');

Route::get('/categories/{categories:slug}', [PageController::class, 'categoryProducts'])->name('tiles');

Route::get('/products/{tiles:slug}', [PageController::class, 'varientproducts'])->name('varient');

Route::get('/productdetail/{detail:slug}', [PageController::class, 'productdetail'])->name('product');

Route::get('/blogs', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{blog:slug}', [PageController::class, 'blog_detail'])->name('blog.detail');





Route::get('/porcelain', [PageController::class, 'porcelain'])->name('porcelain');

Route::get('/swimming-pool-tiles', [PageController::class, 'swimmingPoolTiles'])->name('swimming-pool-tiles');

Route::get('/cladding-tiles-fixing', [PageController::class, 'claddingTilesFixing'])->name('cladding-tiles-fixing');

Route::get('/sanitary-ware', [PageController::class, 'sanitaryWare'])->name('sanitary-ware');

Route::get('/roofing-materials-dubai', [PageController::class, 'roofingMaterialsDubai'])->name('roofing-materials-dubai');

Route::get('/marble-granite', [PageController::class, 'marbleGranite'])->name('marble-granite');

Route::get('/solid-surface-filler-sheets', [PageController::class, 'solidSurfaceFillerSheets'])->name('solid-surface-filler-sheets');

Route::get('/interior-tiles-glue', [PageController::class, 'interiorTilesGlue'])->name('interior-tiles-glue');


//Testing