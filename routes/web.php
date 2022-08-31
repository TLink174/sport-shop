<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPermissionCategoryController;
use App\Http\Controllers\AdminPermissionController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});
Route::get('/', function () {
    return view('admin.index');
})->name('home');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.auth.login');
Route::post('/admin/login-post', [AdminController::class, 'loginPost'])->name('admin.auth.login-post');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.auth.register');
Route::post('/admin/register-post', [AdminController::class, 'registerPost'])->name('admin.auth.register-post');
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.auth.logout');
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/file-manager', [AdminController::class, 'fileManager'])->name('admin.file-manager.index');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('admin.categories.index')->middleware('can:category-list');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('admin.categories.create')->middleware('can:category-create');
        Route::post('/store', [AdminCategoryController::class, 'store'])->name('admin.categories.store')->middleware('can:category-create');
        Route::get('/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.categories.edit')->middleware('can:category-update');
        Route::post('/update/{id}', [AdminCategoryController::class, 'update'])->name('admin.categories.update')->middleware('can:category-update');
        Route::get('/delete/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.categories.delete')->middleware('can:category-delete');
        Route::get('/restore/{id}', [AdminCategoryController::class, 'restore'])->name('admin.categories.restore')->middleware('can:category-delete');
    });
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('admin.blogs.index')->middleware('can:blog-list');
        Route::get('/view/{id}', [AdminBlogController::class, 'show'])->name('admin.blogs.view')->middleware('can:blog-view,id');
        Route::get('/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create')->middleware('can:blog-create');
        Route::post('/store', [AdminBlogController::class, 'store'])->name('admin.blogs.store')->middleware('can:blog-create');
        Route::get('/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit')->middleware('can:blog-update,id');
        Route::post('/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blogs.update')->middleware('can:blog-update,id');
        Route::get('/delete/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.delete')->middleware('can:blog-delete,id');
        Route::get('/restore/{id}', [AdminBlogController::class, 'restore'])->name('admin.blogs.restore')->middleware('can:blog-restore,id');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.users.index')->middleware('can:user-list');
        Route::get('/create', [AdminUserController::class, 'create'])->name('admin.users.create')->middleware('can:user-create');
        Route::post('/store', [AdminUserController::class, 'store'])->name('admin.users.store')->middleware('can:user-create');
        Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.users.edit')->middleware('can:user-update');
        Route::post('/update/{id}', [AdminUserController::class, 'update'])->name('admin.users.update')->middleware('can:user-update');
        Route::get('/delete/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.delete')->middleware('can:user-delete');
    });
    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', [AdminTagController::class, 'index'])->name('admin.tags.index')->middleware('can:tag-list');
        Route::get('/create', [AdminTagController::class, 'create'])->name('admin.tags.create')->middleware('can:tag-create');
        Route::post('/store', [AdminTagController::class, 'store'])->name('admin.tags.store')->middleware('can:tag-create');
        Route::get('/edit/{id}', [AdminTagController::class, 'edit'])->name('admin.tags.edit')->middleware('can:tag-update');
        Route::post('/update/{id}', [AdminTagController::class, 'update'])->name('admin.tags.update')->middleware('can:tag-update');
        Route::get('/delete/{id}', [AdminTagController::class, 'destroy'])->name('admin.tags.delete')->middleware('can:tag-delete');
        Route::get('/restore/{id}', [AdminTagController::class, 'restore'])->name('admin.tags.restore')->middleware('can:tag-restore');
    });
    Route::group(['prefix' => 'permission-category'], function () {
        Route::get('/', [AdminPermissionCategoryController::class, 'index'])->name('admin.permission-categories.index')->middleware('can:permission-category-list');
        Route::get('/create', [AdminPermissionCategoryController::class, 'create'])->name('admin.permission-categories.create')->middleware('can:permission-category-create');
        Route::post('/store', [AdminPermissionCategoryController::class, 'store'])->name('admin.permission-categories.store')->middleware('can:permission-category-create');
        Route::get('/edit/{id}', [AdminPermissionCategoryController::class, 'edit'])->name('admin.permission-categories.edit')->middleware('can:permission-category-update');
        Route::post('/update/{id}', [AdminPermissionCategoryController::class, 'update'])->name('admin.permission-categories.update')->middleware('can:permission-category-update');
        Route::get('/delete/{id}', [AdminPermissionCategoryController::class, 'destroy'])->name('admin.permission-categories.delete')->middleware('can:permission-category-delete');
        Route::get('/restore/{id}', [AdminPermissionCategoryController::class, 'restore'])->name('admin.permission-categories.restore')->middleware('can:permission-category-restore');
    });
    Route::group(['prefix' => 'permission'], function () {
        Route::get('/', [AdminPermissionController::class, 'index'])->name('admin.permissions.index')->middleware('can:permission-list');
        Route::get('/create', [AdminPermissionController::class, 'create'])->name('admin.permissions.create')->middleware('can:permission-create');
        Route::post('/store', [AdminPermissionController::class, 'store'])->name('admin.permissions.store')->middleware('can:permission-create');
        Route::get('/edit/{id}', [AdminPermissionController::class, 'edit'])->name('admin.permissions.edit')->middleware('can:permission-update');
        Route::post('/update/{id}', [AdminPermissionController::class, 'update'])->name('admin.permissions.update')->middleware('can:permission-update');
        Route::get('/delete/{id}', [AdminPermissionController::class, 'destroy'])->name('admin.permissions.delete')->middleware('can:permission-delete');
        Route::get('/restore/{id}', [AdminPermissionController::class, 'restore'])->name('admin.permissions.restore')->middleware('can:permission-restore');
    });
    Route::group(['prefix' => 'role'], function () {
        Route::get('/', [AdminRoleController::class, 'index'])->name('admin.roles.index')->middleware('can:role-list');
        Route::get('/create', [AdminRoleController::class, 'create'])->name('admin.roles.create')->middleware('can:role-create');
        Route::post('/store', [AdminRoleController::class, 'store'])->name('admin.roles.store')->middleware('can:role-create');
        Route::get('/edit/{id}', [AdminRoleController::class, 'edit'])->name('admin.roles.edit')->middleware('can:role-update');
        Route::post('/update/{id}', [AdminRoleController::class, 'update'])->name('admin.roles.update')->middleware('can:role-update');
        Route::get('/delete/{id}', [AdminRoleController::class, 'destroy'])->name('admin.roles.delete')->middleware('can:role-delete');
        Route::get('/restore/{id}', [AdminRoleController::class, 'restore'])->name('admin.roles.restore')->middleware('can:role-restore');
    });
});

