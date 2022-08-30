<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermissionRequest;
use App\Http\Services\PermissionCategoryService;
use App\Http\Services\PermissionService;
use App\Models\Permission;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    private PermissionService $permissionService;
    private PermissionCategoryService $permissionCategoryService;

    public function __construct(PermissionService $permissionService, PermissionCategoryService $permissionCategoryService)
    {
        $this->permissionService = $permissionService;
        $this->permissionCategoryService = $permissionCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $permissionCategories = $this->permissionCategoryService->getAll();
        return view('admin.pages.permission.index', compact('permissionCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $permissionCategories = $this->permissionCategoryService->getAll();
        return view('admin.pages.permission.create', compact('permissionCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePermissionRequest $request)
    {
        $this->permissionService->createPemission($request);
        return redirect()->route('admin.permissions.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
