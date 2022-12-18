<?php

namespace App\Http\Controllers;

use App\Http\Services\CartDetailService;
use App\Http\Services\ProductService;
use App\Http\Services\CategoryProductService;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Size;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ProductService $productService;
    private CategoryProductService $categoryProductService;
    private CartDetailService $cartDetailService;

    public function __construct(ProductService $productService, CategoryProductService $categoryProductService, CartDetailService $cartDetailService )
    {
        $this->productService = $productService;
        $this->categoryProductService = $categoryProductService;
        $this->cartDetailService = $cartDetailService;
    }

    public function homePage(){
//<<<<<<< HEAD

//=======
        // $product = Size::find(1);
        // if ($product){
        //     dd($product);

        // }
//>>>>>>> bb755fce839e33b3f18b0ce60f380a8939f2e081
        $categoryProduct = $this->categoryProductService->getAll();
        $product = $this->productService->getAll();
        return view('home.pages.index', compact('categoryProduct', 'product'));



        // $blogs = $this->productService->getAllBlogPublic(10);
        // $categories = $this->categoryProductService->getAllCategoryPublic(10);
        // if (count($blogs) > 0 && count($categories) > 0){

        // }

    }
    public function quickview($id)
    {

    }

    public function cart(){
        // $blog = $this->productService->getBlogById($id);
        // $categories = $this->categoryProductService->getAllCategoryPublic(10);
        // if (isset($blog) && count($categories) > 0 && $blog->status == 1 ){
        //     return view('home.pages.detail', compact('blog', 'categories'));
        // }
        // else{
        //     return redirect()->route('home.index');
        // }
        $cartDetail = $this->cartDetailService->getAll();
        $categoryProduct = $this->categoryProductService->getAll();
        $product = $this->productService->getAll();
        return view('home.pages.sport_shop.cart', compact('categoryProduct', 'product', 'cartDetail'));
    }
    public function product()
    {
        $categoryProduct = $this->categoryProductService->getAll();
        $product = $this->productService->getAll();
        return view('home.pages.sport_shop.product', compact('categoryProduct', 'product'));
    }
    public function create($id)
    {
        $categoryProduct = $this->categoryProductService->getAll();
        $product = $this->productService->getById($id);

        return view('home.pages.sport_shop.product', compact('product', 'categoryProduct'));

    }
}
