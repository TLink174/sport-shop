<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryProductService;
use App\Models\CategoryProduct;
use App\Http\Requests\StoreCategoryProductRequest;
use App\Http\Requests\UpdateCategoryProductRequest;

class CategoryProductController extends Controller
{
    private CategoryProductService $categoryProductService;

    public function __construct(CategoryProductService $categoryProductService)
    {
        $this->categoryProductService = $categoryProductService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = $this->categoryProductService->findAllHaveSoftDeletes()->paginate(10);
        return view('admin.pages.product_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.pages.product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryProductRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryProductRequest $request)
    {
        $this->categoryProductService->create($request);
        return redirect()->route('admin.product-category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $categories = $this->categoryProductService->getAll();
        $category = $this->categoryProductService->getById($id);
        return view('admin.pages.product_category.edit', compact(['categories','category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryProductRequest  $request
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryProductRequest $request,$id)
    {
        $this->categoryProductService->update($id, $request);
        return redirect()->route('admin.product-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoryProductService->delete($id);
        return redirect()->route('admin.product-category.index');
    }
    public function restore($id)
    {
        $this->categoryProductService->restore($id);
        return redirect()->route('admin.product-category.index');
    }
}
