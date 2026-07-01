<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\TileModel;
use App\Models\Product;

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
        return view('pages.porcelain');
    }

    public function swimmingPoolTiles()
    {
        return view('pages.swimming');
    }

    public function claddingTilesFixing()
    {
        return view('pages.cladding');
    }

    public function sanitaryWare()
    {
        return view('pages.sanitary');
    }

    public function roofingMaterialsDubai()
    {
        return view('pages.roofing');
    }

    public function marbleGranite()
    {
        return view('pages.marble');
    }

    public function solidSurfaceFillerSheets()
    {
        return view('pages.solid');
    }

    public function interiorTilesGlue()
    {
        return view('pages.interior');
    }
}
