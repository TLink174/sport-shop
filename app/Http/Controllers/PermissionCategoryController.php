<?php

namespace App\Http\Controllers;

use App\Models\PermissionCategory;
use App\Http\Requests\StorePermissionCategoryRequest;
use App\Http\Requests\UpdatePermissionCategoryRequest;

class PermissionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePermissionCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionCategoryRequest $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionCategory $permissionCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePermissionCategoryRequest $request
     * @param \App\Models\PermissionCategory $permissionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionCategoryRequest $request, PermissionCategory $permissionCategory)
    {
        //
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
