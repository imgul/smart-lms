<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function about()
    {
        return view('front.about');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function blog_single()
    {
        return view('front.blog-single');
    }
}
