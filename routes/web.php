<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WebsiteController;
use App\Http\Controllers\Backend\BlogCategoryController;


Route::get('/', [WebsiteController::class,'home'])->name('home');
Route::get('/category-blog', [WebsiteController::class,'categoryBlog'])->name('category-blog');
Route::get('/blog-details', [WebsiteController::class,'blogDetails'])->name('blog-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [WebsiteController::class,'dashboard'])->name('dashboard');

    Route::get('/create-blog-categories',[BlogCategoryController::class,'create'])->name('blog-categories.create');
    Route::post('/store-blog-categories',[BlogCategoryController::class,'store'])->name('blog-categories.store');
    Route::get('/manage-blog-categories',[BlogCategoryController::class,'manage'])->name('blog-categories.manage');
    Route::get('/edit-blog-categories',[BlogCategoryController::class,'edit'])->name('blog-categories.edit');
    Route::post('/update-blog-categories',[BlogCategoryController::class,'update'])->name('blog-categories.update');
    Route::get('/delete-blog-categories',[BlogCategoryController::class,'delete'])->name('blog-categories.delete');
});
