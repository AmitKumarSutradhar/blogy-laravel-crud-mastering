<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    protected $blogCategories, $blogs;
    public function create(){
        $this->blogCategories = BlogCategory::all();
        return view('backend.blogs.create',[
            'blogCategories' => $this->blogCategories,
        ]);
    }

    public function store(Request $request){
        Blog::createBlog($request);
        return back()->with('success',"Product category added successfully");

    }

    public function manage(){
        $this->blogs = Blog::all();
        return view('backend.blogs.manage',[
            'blogs' => $this->blogs,
        ]);
    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }
}
