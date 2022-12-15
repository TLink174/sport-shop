<?php

namespace App\Http\Controllers;

use App\Http\Services\BlogService;
use App\Http\Services\CategoryService;
use App\Models\Cart;
use App\Models\Size;
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
        $product = Size::find(1);
        if ($product){
            dd($product);
            
        }
        return view('home.pages.index');

        

        // $blogs = $this->blogService->getAllBlogPublic(10);
        // $categories = $this->categoryService->getAllCategoryPublic(10);
        // if (count($blogs) > 0 && count($categories) > 0){
           
        // }

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
