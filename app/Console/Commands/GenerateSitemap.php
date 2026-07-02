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
        if (request() && request()->getHost() && !in_array(request()->getHost(), ['localhost', '127.0.0.1', '[::1]'])) {
            url()->forceRootUrl(request()->getSchemeAndHttpHost());
        }

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

        $sitemap->add(
            Url::create(route('porcelain'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('swimming-pool-tiles'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('cladding-tiles-fixing'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('sanitary-ware'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('roofing-materials-dubai'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('marble-granite'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('solid-surface-filler-sheets'))->setPriority(0.8)
        );

        $sitemap->add(
            Url::create(route('interior-tiles-glue'))->setPriority(0.8)
        );

        // ===== CATEGORY PAGES =====
        Category::where('status', true)->cursor()->each(function ($category) use ($sitemap) {
            $sitemap->add(
                Url::create(route('tiles', ['categories' => $category->slug]))
                    ->setLastModificationDate($category->updated_at)
                    ->setPriority(0.9)
            );
        });

        // ===== VARIANT PAGES =====
        TileModel::where('status', true)
            ->whereHas('category', function ($query) {
                $query->where('status', true);
            })
            ->cursor()
            ->each(function ($tile) use ($sitemap) {
                $sitemap->add(
                    Url::create(route('varient', ['tiles' => $tile->slug]))
                        ->setLastModificationDate($tile->updated_at)
                        ->setPriority(0.8)
                );
            });

        // ===== PRODUCT DETAIL PAGES =====
        Product::where('status', true)
            ->whereHas('tile_model', function ($query) {
                $query->where('status', true)
                    ->whereHas('category', function ($q) {
                        $q->where('status', true);
                    });
            })
            ->whereHas('size', function ($query) {
                $query->where('status', true);
            })
            ->cursor()
            ->each(function ($product) use ($sitemap) {
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
