<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    protected $blogCategories,$blogs;
    public function create(){
        return view('backend.blog-category.create');
    }

    public function store(Request $request){
        BlogCategory::createBlogCategory($request);
        return back()->with('success',"Product category added successfully");

    }

    public function manage(){
        $this->blogCategories = BlogCategory::all();
        $this->blogs = Blog::all();
        return view('backend.blog-category.manage',[
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
