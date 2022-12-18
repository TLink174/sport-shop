<?php

namespace App\Http\Controllers;

use App\Http\Services\CartDetailService;
use App\Http\Services\CartService;
use App\Http\Services\ProductService;
use App\Models\CartDetail;
use App\Http\Requests\StoreCartDetailRequest;
use App\Http\Requests\UpdateCartDetailRequest;
use Illuminate\Support\Facades\Auth;

class CartDetailController extends Controller
{
    private cartService $cartService;
    private ProductService $productService;
    private CartDetailService $cartDetailService;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(cartService $cartService, ProductService $productService, CartDetailService $cartDetailService)
    {
        $this->cartService = $cartService;
        $this->productService = $productService;
        $this->cartDetailService = $cartDetailService;
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($id_product)
    {
        $product = $this->productService->getById($id_product);
        $cart = $this->cartService->findByIdUser(Auth::user()->id);

        return view('', compact('product', 'cart'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartDetailRequest $request, $id_product)
    {
        $product = $this->productService->getById($id_product)->id;
        $cart = $this->cartService->findByIdUser(Auth::user()->id);
        $price = $this->productService->getById($id_product)->price;
        $this->cartDetailService->create($request, $cart, $product, $price);
        return redirect()->route('');
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
