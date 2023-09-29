<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WebsiteController;


Route::get('/', [WebsiteController::class,'home'])->name('home');
Route::get('/category-blog', [WebsiteController::class,'categoryBlog'])->name('category-blog');
Route::get('/blog-details', [WebsiteController::class,'blogDetails'])->name('blog-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
