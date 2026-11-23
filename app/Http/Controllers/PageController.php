<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\TileModel;
use App\Models\Product;
use App\Models\ProductPage;

class PageController extends Controller
{
    public function about()
    {
        $testimonials = Testimonial::where('status', 1)->latest()->get();

        return view('about', compact('testimonials'));
    }
    public function categories()
    {
        $categories = Category::where('status', 1)->get();

        return view('categories', compact('categories'));
    }

    public function categoryProducts(Category $categories)
    {
        $tiles = TileModel::where('category_id', $categories->id)->where('status', true)->firstorfail();

        return view('tiles', compact('tiles', 'categories'));
    }
    public function varientproducts(TileModel $tiles)
    {
        $varients = Product::with('size')->where('tile_model_id', $tiles->id)->get();

        return view('varient', compact('varients', 'tiles'));
    }

    public function productdetail(Product $detail)
    {
        $detailpage = Product::with('size', 'color', 'tile_model', 'features')->where('id', $detail->id)->firstOrFail();
        return view('productdetail', compact('detailpage'));
    }

    public function blog()
    {
        $blogs = Blog::where('status', 1)->latest()->get();

        return view('blog', compact('blogs'));
    }

    public function blog_detail(Blog $blog)
    {

        $blogs = Blog::where('status', 1)->where('id', '!=', $blog->id)->latest()->take(5)->get();

        return view('blog_detail', compact('blog', 'blogs'));
    }

    public function porcelain()
    {
        $page = ProductPage::where('slug', 'porcelain')->first();
        return view('pages.porcelain', compact('page'));
    }

    public function swimmingPoolTiles()
    {
        $page = ProductPage::where('slug', 'swimming-pool-tiles')->first();
        return view('pages.swimming', compact('page'));
    }

    public function claddingTilesFixing()
    {
        $page = ProductPage::where('slug', 'cladding-tiles-fixing')->first();
        return view('pages.cladding', compact('page'));
    }

    public function sanitaryWare()
    {
        $page = ProductPage::where('slug', 'sanitary-ware')->first();
        return view('pages.sanitary', compact('page'));
    }

    public function roofingMaterialsDubai()
    {
        $page = ProductPage::where('slug', 'roofing-materials-dubai')->first();
        return view('pages.roofing', compact('page'));
    }

    public function marbleGranite()
    {
        $page = ProductPage::where('slug', 'marble-granite')->first();
        return view('pages.marble', compact('page'));
    }

    public function solidSurfaceFillerSheets()
    {
        $page = ProductPage::where('slug', 'solid-surface-filler-sheets')->first();
        return view('pages.solid', compact('page'));
    }

    public function interiorTilesGlue()
    {
        $page = ProductPage::where('slug', 'interior-tiles-glue')->first();
        return view('pages.interior', compact('page'));
    }
}
