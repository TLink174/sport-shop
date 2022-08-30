<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPermissionController;
use App\Http\Controllers\AdminPermissonCategoryController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PermissionCategoryController;
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
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/', function () {
    return view('admin.pages.category.index');
})->name('home');
Route::group(['prefix' => 'admin',['middleware' => 'auth']], function () {
    Route::get('/login', [AdminController::class,'login'])->name('admin.auth.login');
    Route::post('/login-post', [AdminController::class, 'loginPost'])->name('admin.auth.login-post');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.auth.logout');
    Route::get('/register', [AdminController::class, 'register'])->name('admin.auth.register');
    Route::post('/register-post', [AdminController::class, 'registerPost'])->name('admin.auth.register-post');
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
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
        Route::get('/restore/{id}', [AdminBlogController::class, 'restore'])->name('admin.blogs.restore');
    });
    Route::group(['prefix' => 'user' ], function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('/create', [AdminUserController::class, 'create'])->name('admin.users.create');
        Route::post('/store', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::post('/update/{id}', [AdminUserController::class, 'update'])->name('admin.users.update');
        Route::get('/delete/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.delete');
    });
    Route::group(['prefix' => 'tag' ], function () {
        Route::get('/', [AdminTagController::class, 'index'])->name('admin.tags.index');
        Route::get('/create', [AdminTagController::class, 'create'])->name('admin.tags.create');
        Route::post('/store', [AdminTagController::class, 'store'])->name('admin.tags.store');
        Route::get('/edit/{id}', [AdminTagController::class, 'edit'])->name('admin.tags.edit');
        Route::post('/update/{id}', [AdminTagController::class, 'update'])->name('admin.tags.update');
        Route::get('/delete/{id}', [AdminTagController::class, 'destroy'])->name('admin.tags.delete');
        Route::get('/restore/{id}', [AdminTagController::class, 'restore'])->name('admin.tags.restore');
    });
    Route::group(['prefix' => 'permission-category' ], function () {
        Route::get('/', [AdminPermissonCategoryController::class, 'index'])->name('admin.permission-categories.index');
        Route::get('/create', [AdminPermissonCategoryController::class, 'create'])->name('admin.permission-categories.create');
        Route::post('/store', [AdminPermissonCategoryController::class, 'store'])->name('admin.permission-categories.store');
        Route::get('/edit/{id}', [AdminPermissonCategoryController::class, 'edit'])->name('admin.permission-categories.edit');
        Route::post('/update/{id}', [AdminPermissonCategoryController::class, 'update'])->name('admin.permission-categories.update');
        Route::get('/delete/{id}', [AdminPermissonCategoryController::class, 'destroy'])->name('admin.permission-categories.delete');
        Route::get('/restore/{id}', [AdminPermissonCategoryController::class, 'restore'])->name('admin.permission-categories.restore');
    });
    Route::group(['prefix' => 'permission' ], function () {
        Route::get('/', [AdminPermissionController::class, 'index'])->name('admin.permissions.index');
        Route::get('/create', [AdminPermissionController::class, 'create'])->name('admin.permissions.create');
        Route::post('/store', [AdminPermissionController::class, 'store'])->name('admin.permissions.store');
        Route::get('/edit/{id}', [AdminPermissionController::class, 'edit'])->name('admin.permissions.edit');
        Route::post('/update/{id}', [AdminPermissionController::class, 'update'])->name('admin.permissions.update');
        Route::get('/delete/{id}', [AdminPermissionController::class, 'destroy'])->name('admin.permissions.delete');
        Route::get('/restore/{id}', [AdminPermissionController::class, 'restore'])->name('admin.permissions.restore');
    });
    Route::group(['prefix' => 'role' ], function () {
        Route::get('/', [AdminRoleController::class, 'index'])->name('admin.roles.index');
        Route::get('/create', [AdminRoleController::class, 'create'])->name('admin.roles.create');
        Route::post('/store', [AdminRoleController::class, 'store'])->name('admin.roles.store');
        Route::get('/edit/{id}', [AdminRoleController::class, 'edit'])->name('admin.roles.edit');
        Route::post('/update/{id}', [AdminRoleController::class, 'update'])->name('admin.roles.update');
        Route::get('/delete/{id}', [AdminRoleController::class, 'destroy'])->name('admin.roles.delete');
        Route::get('/restore/{id}', [AdminRoleController::class, 'restore'])->name('admin.roles.restore');
    } );
});

