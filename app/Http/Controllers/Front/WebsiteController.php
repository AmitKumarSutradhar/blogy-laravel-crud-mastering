<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        return view('frontend.home.home');
    }

    public function categoryBlog(){
        return view('frontend.blogs.category-blog');
    }
    public function blogDetails(){
        return view('frontend.blogs.blog-details');
    }
    public function dashboard(){
        return view('backend.dashboard.dashboard');
    }
}
