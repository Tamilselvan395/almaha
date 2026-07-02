<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\TileModel;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    use RefreshDatabase;

    public function test_sitemap_generation_filters_inactive_records_and_includes_static_pages()
    {
        // 1. Create active entities
        $activeCategory = Category::create([
            'name' => 'Active Category',
            'slug' => 'active-category',
            'status' => true,
        ]);

        $activeTile = TileModel::create([
            'category_id' => $activeCategory->id,
            'name' => 'Active Tile',
            'slug' => 'active-tile',
            'status' => true,
        ]);

        $activeSize = Size::create([
            'width' => '100',
            'height' => '100',
            'label' => '100x100',
            'slug' => '100x100',
            'status' => true,
        ]);

        $color = Color::create([
            'name' => 'Red',
            'hex_code' => '#FF0000',
            'slug' => 'red',
            'status' => true,
        ]);

        $activeProduct = Product::create([
            'tile_model_id' => $activeTile->id,
            'color_id' => $color->id,
            'size_id' => $activeSize->id,
            'name' => 'Active Product',
            'description' => 'Active Product Description',
            'slug' => 'active-product',
            'look' => 'Modern',
            'tiles_code' => 'ACT-PROD-1',
            'status' => true,
        ]);

        $activeBlog = Blog::create([
            'title' => 'Active Blog',
            'short_description' => 'Short desc',
            'long_description' => 'Long desc',
            'image' => 'active-blog.jpg',
            'slug' => 'active-blog',
            'meta_title' => 'Active Blog Meta Title',
            'meta_description' => 'Active Blog Meta Description',
            'status' => true,
        ]);

        // 2. Create inactive/disabled entities
        $inactiveCategory = Category::create([
            'name' => 'Inactive Category',
            'slug' => 'inactive-category',
            'status' => false,
        ]);

        $inactiveTile = TileModel::create([
            'category_id' => $activeCategory->id,
            'name' => 'Inactive Tile',
            'slug' => 'inactive-tile',
            'status' => false,
        ]);

        $inactiveSize = Size::create([
            'width' => '200',
            'height' => '200',
            'label' => '200x200',
            'slug' => '200x200',
            'status' => false,
        ]);

        $inactiveProduct = Product::create([
            'tile_model_id' => $activeTile->id,
            'color_id' => $color->id,
            'size_id' => $activeSize->id,
            'name' => 'Inactive Product',
            'description' => 'Inactive Product Description',
            'slug' => 'inactive-product',
            'look' => 'Modern',
            'tiles_code' => 'INACT-PROD-1',
            'status' => false,
        ]);

        // Product with inactive size
        $productWithInactiveSize = Product::create([
            'tile_model_id' => $activeTile->id,
            'color_id' => $color->id,
            'size_id' => $inactiveSize->id,
            'name' => 'Product Inactive Size',
            'description' => 'Description',
            'slug' => 'product-inactive-size',
            'look' => 'Modern',
            'tiles_code' => 'ACT-PROD-2',
            'status' => true,
        ]);

        // Product with inactive category
        $tileInInactiveCategory = TileModel::create([
            'category_id' => $inactiveCategory->id,
            'name' => 'Tile in Inactive Category',
            'slug' => 'tile-inactive-category',
            'status' => true,
        ]);

        $productInInactiveCategory = Product::create([
            'tile_model_id' => $tileInInactiveCategory->id,
            'color_id' => $color->id,
            'size_id' => $activeSize->id,
            'name' => 'Product Inactive Category',
            'description' => 'Description',
            'slug' => 'product-inactive-category',
            'look' => 'Modern',
            'tiles_code' => 'ACT-PROD-3',
            'status' => true,
        ]);

        $inactiveBlog = Blog::create([
            'title' => 'Inactive Blog',
            'short_description' => 'Short desc',
            'long_description' => 'Long desc',
            'image' => 'inactive-blog.jpg',
            'slug' => 'inactive-blog',
            'meta_title' => 'Inactive Blog Meta Title',
            'meta_description' => 'Inactive Blog Meta Description',
            'status' => false,
        ]);

        // 3. Generate sitemap
        $sitemapPath = public_path('sitemap.xml');
        if (file_exists($sitemapPath)) {
            unlink($sitemapPath);
        }

        Artisan::call('sitemap:generate');

        $this->assertFileExists($sitemapPath);
        $sitemapContent = file_get_contents($sitemapPath);

        // 4. Assert static pages are present
        $this->assertStringContainsString('/porcelain', $sitemapContent);
        $this->assertStringContainsString('/swimming-pool-tiles', $sitemapContent);
        $this->assertStringContainsString('/cladding-tiles-fixing', $sitemapContent);
        $this->assertStringContainsString('/sanitary-ware', $sitemapContent);
        $this->assertStringContainsString('/roofing-materials-dubai', $sitemapContent);
        $this->assertStringContainsString('/marble-granite', $sitemapContent);
        $this->assertStringContainsString('/solid-surface-filler-sheets', $sitemapContent);
        $this->assertStringContainsString('/interior-tiles-glue', $sitemapContent);

        // 5. Assert active records are present
        $this->assertStringContainsString('categories/active-category', $sitemapContent);
        $this->assertStringContainsString('products/active-tile', $sitemapContent);
        $this->assertStringContainsString('productdetail/active-product', $sitemapContent);
        $this->assertStringContainsString('blog/active-blog', $sitemapContent);

        // 6. Assert inactive/disabled records are NOT present
        $this->assertStringNotContainsString('categories/inactive-category', $sitemapContent);
        $this->assertStringNotContainsString('products/inactive-tile', $sitemapContent);
        $this->assertStringNotContainsString('productdetail/inactive-product', $sitemapContent);
        $this->assertStringNotContainsString('blog/inactive-blog', $sitemapContent);

        // 7. Assert products with inactive dependencies are NOT present
        $this->assertStringNotContainsString('productdetail/product-inactive-size', $sitemapContent);
        $this->assertStringNotContainsString('productdetail/product-inactive-category', $sitemapContent);
        $this->assertStringNotContainsString('products/tile-inactive-category', $sitemapContent);
    }
}
