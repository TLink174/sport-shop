<?php

namespace App\Http\Controllers;

use App\Http\Services\CartDetailService;
use App\Http\Services\CartService;
use App\Http\Services\CategoryProductService;
use App\Http\Services\ColorService;
use App\Http\Services\ProductService;
use App\Http\Services\SizeService;
use App\Http\Services\UserService;
use App\Models\CartDetail;
use App\Http\Requests\StoreCartDetailRequest;
use App\Http\Requests\UpdateCartDetailRequest;
use Illuminate\Support\Facades\Auth;

class CartDetailController extends Controller
{
    private cartService $cartService;
    private ProductService $productService;
    private CartDetailService $cartDetailService;
    private CategoryProductService $categoryProductService;
    private SizeService $sizeService;
    private ColorService $colorService;
    private UserService $userService;
    private CartDetail $cartDetail;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(cartService $cartService, ProductService $productService, CartDetailService $cartDetailService, CategoryProductService $categoryProductService, SizeService $sizeService, ColorService $colorService, UserService $userService, CartDetail $cartDetail)
    {
        $this->cartService = $cartService;
        $this->productService = $productService;
        $this->cartDetailService = $cartDetailService;
        $this->categoryProductService = $categoryProductService;
        $this->sizeService = $sizeService;
        $this->colorService = $colorService;
        $this->userService = $userService;
        $this->cartDetail = $cartDetail;
    }

    public function index($id)
    {
        if($this->cartDetail->where('id_cart', $id)->get()->isNotEmpty())
        {
            $cartDetail = $this->cartDetailService->getByIdCart($id);
            $categoryProduct = $this->categoryProductService->getAll();
            $product = $this->productService->getAll();
            return view('home.pages.sport_shop.cart', compact('categoryProduct', 'product', 'cartDetail'));
        }
        else
        {
            $categoryProduct = $this->categoryProductService->getAll();
            $product = $this->productService->getAll();
            return view('home.pages.index', compact('categoryProduct', 'product'));
        }
//        $cartDetail = $this->cartDetailService->getByIdCart($id);
//        $categoryProduct = $this->categoryProductService->getAll();
//        $product = $this->productService->getAll();
//        return view('home.pages.sport_shop.cart', compact('categoryProduct', 'product', 'cartDetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function product()
    {
        $categoryProduct = $this->categoryProductService->getAll();
        $product = $this->productService->getAll();
        return view('home.pages.sport_shop.product', compact('categoryProduct', 'product'));
    }
    public function create($id)
    {
        $categoryProduct = $this->categoryProductService->getAll();
        $productDetail = $this->productService->getById($id);
        $sizeProducts = $this->sizeService->getByIdProduct($id);
        $colorProducts = $this->colorService->getByIdProduct($id);
        return view('home.pages.sport_shop.product', compact('productDetail', 'categoryProduct', 'colorProducts', 'sizeProducts'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartDetailRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(StoreCartDetailRequest $request, $id_product)
    {
        $productDetail = $this->productService->getById($id_product)->id;
        $cart = $this->cartService->findByIdUser(Auth::user()->id)->id;
        $price = $this->productService->getById($id_product)->price;
        $this->cartDetailService->create($request, $cart, $productDetail);
        $cartDetail = $this->cartDetailService->getByIdCart($cart);
        $product = $this->productService->getAll();
        $categoryProduct = $this->categoryProductService->getAll();
        return view('home.pages.sport_shop.cart', compact('cart', 'product', 'cartDetail', 'categoryProduct'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cartDetail = $this->cartDetailService->getAll();
        return view('', compact('cartDetail', ''));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CartDetail $cartDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartDetailRequest  $request
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartDetailRequest $request, CartDetail $cartDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartDetail $cartDetail)
    {
        //
    }
}
