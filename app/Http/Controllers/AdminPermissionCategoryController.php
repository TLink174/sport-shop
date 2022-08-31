<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermissionCategoryRequest;
use App\Http\Services\PermissionCategoryService;
use App\Models\PermissionCategory;
use Illuminate\Http\Request;

class AdminPermissionCategoryController extends Controller
{
    private PermissionCategoryService $permissionCategoryService;

    public function __construct(PermissionCategoryService $permissionCategoryService)
    {
        $this->permissionCategoryService = $permissionCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $permissionCategories = $this->permissionCategoryService->getPaginate(10);
        return view('admin.pages.permission_category.index', compact('permissionCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        return view('admin.pages.permission_category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePermissionCategoryRequest $request)
    {
        $this->permissionCategoryService->create($request);
        return redirect()->route('admin.permission-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\PermissionCategory $permissionCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionCategory $permissionCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\PermissionCategory $permissionCategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $permissionCategory = $this->permissionCategoryService->getById($id);
        return view('admin.pages.permission_category.edit', compact('permissionCategory'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PermissionCategory $permissionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->permissionCategoryService->update($request, $id);
        return redirect()->route('admin.permission-categories.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\PermissionCategory $permissionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionCategory $permissionCategory)
    {
        //
    }
}
