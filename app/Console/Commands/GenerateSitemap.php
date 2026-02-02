<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Category;
use App\Models\TileModel;
use App\Models\Product;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate XML sitemap automatically';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        // ===== STATIC PAGES =====
        $sitemap->add(
            Url::create(route('home'))
                ->setPriority(1.0)
                ->setChangeFrequency('daily')
        );

        $sitemap->add(
            Url::create(route('about'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('contact'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('categories'))->setPriority(0.9)
        );

        // ===== CATEGORY PAGES =====
        Category::cursor()->each(function ($category) use ($sitemap) {
            $sitemap->add(
                Url::create(route('tiles', ['categories' => $category->slug]))
                    ->setLastModificationDate($category->updated_at)
                    ->setPriority(0.9)
            );
        });

        // ===== VARIANT PAGES =====
        TileModel::cursor()->each(function ($tile) use ($sitemap) {
            $sitemap->add(
                Url::create(route('varient', ['tiles' => $tile->slug]))
                    ->setLastModificationDate($tile->updated_at)
                    ->setPriority(0.8)
            );
        });

        // ===== PRODUCT DETAIL PAGES =====
        Product::cursor()->each(function ($product) use ($sitemap) {
            $sitemap->add(
                Url::create(route('product', ['detail' => $product->slug]))
                    ->setLastModificationDate($product->updated_at)
                    ->setPriority(0.7)
            );
        });

        // ====== BLOG PAGE ========
        $sitemap->add(
            Url::create(route('blog'))->setPriority(0.9)
        );

        // ===== BLOG DETAIL PAGES =====
        // ===== BLOG DETAIL PAGES =====
        Blog::where('status', true)->cursor()->each(function ($blog) use ($sitemap) {
            $sitemap->add(
                Url::create(route('blog.detail', ['blog' => $blog->slug]))
                    ->setLastModificationDate($blog->updated_at)
                    ->setPriority(0.7)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
