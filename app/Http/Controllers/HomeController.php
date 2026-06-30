<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\MetaDetailTable;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    { 
        $categories = Category::where('status', 1)->get(); // optional status
        $testimonials = Testimonial::where('status', 1)->latest()->get();
        $blogs = Blog::where('status', 1)->take(4)->latest()->get();
        $meta_details = MetaDetailTable::where('status',1)->FirstorFail();

        return view('home', compact('categories','testimonials','blogs','meta_details'));
    }
}


