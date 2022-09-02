<?php

namespace App\Http\Controllers;

use App\Http\Services\BlogService;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private BlogService $blogService;
    private CategoryService $categoryService;

    public function __construct(BlogService $blogService, CategoryService $categoryService )
    {
        $this->blogService = $blogService;
        $this->categoryService = $categoryService;
    }

    public function homePage(){
        $blogs = $this->blogService->getAllBlogPublic(10);
        $categories = $this->categoryService->getAllCategoryPublic(10);
        if (count($blogs) > 0 && count($categories) > 0){
            return view('home.pages.index', compact('blogs', 'categories'));
        }

    }

    public function detailPage($id){
        $blog = $this->blogService->getBlogById($id);
        $categories = $this->categoryService->getAllCategoryPublic(10);
        if (isset($blog) && count($categories) > 0 && $blog->status == 1 ){
            return view('home.pages.detail', compact('blog', 'categories'));
        }
        else{
            return redirect()->route('home.index');
        }

    }
}
