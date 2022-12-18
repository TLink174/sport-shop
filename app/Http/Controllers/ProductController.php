<?php

namespace App\Http\Controllers;

use App\Http\Services\CartService;
use App\Http\Services\CategoryProductService;
use App\Http\Services\ColorService;
use App\Http\Services\ProductService;
use App\Http\Services\SizeService;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private ProductService $productService;
    private CategoryProductService $categoryProductService;
    private SizeService $sizeService;
    private ColorService $colorService;


    public function __construct(ProductService $productService, CategoryProductService $categoryProductService, SizeService $sizeService, ColorService $colorService)
    {
        $this->productService = $productService;
        $this->categoryProductService = $categoryProductService;
        $this->sizeService = $sizeService;
        $this->colorService = $colorService;

    }
    public function index(StoreProductRequest $request)
    {
        $productCategories = $this->categoryProductService->getAll();
        return view('admin.pages.product.index', compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $sizes = $this->sizeService->getAll();
        $colors = $this->colorService->getAll();
        $categoryProduct = $this->categoryProductService->getAll();

        return view('admin.pages.product.create', compact(['categoryProduct', 'sizes', 'colors']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProductRequest $request)
    {
        $this->productService->create($request);
        $sizes = $this->sizeService->getAll();
        $colors = $this->colorService->getAll();
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $product = $this->productService->getById($id);
        return view('admin.pages.product.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = $this->productService->getByid($id);
        $sizes = $this->sizeService->getAll();
        $colors = $this->colorService->getAll();
        $categoryProduct = $this->categoryProductService->getAll();
        return view('admin.pages.product.edit', compact(['product', 'categoryProduct', 'sizes', 'colors']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $this->productService->update($request, $id);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->productService->delete($id);
        return redirect()->route('admin.product.index');
    }
    public function restore($id)
    {
        $this->productService->restore($id);
        return redirect()->route('admin.product.index');
    }
}
