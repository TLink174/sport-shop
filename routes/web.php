<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.page.category.index');
})->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [AdminCategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/update/{id}', [AdminCategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('/delete/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.categories.delete');
        Route::get('/restore/{id}', [AdminCategoryController::class, 'restore'])->name('admin.categories.restore');
    });
    Route::group(['prefix' => 'blog' ], function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
        Route::get('/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
        Route::post('/store', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
        Route::get('/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
        Route::post('/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
        Route::get('/delete/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.delete');
    });
});

