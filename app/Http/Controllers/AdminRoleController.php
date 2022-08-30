<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRolePermissionRequest;
use App\Http\Services\PermissionCategoryService;
use App\Http\Services\PermissionService;
use App\Http\Services\RoleService;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{


    private PermissionCategoryService $permissionCategoryService;
    private RoleService $roleService;

    public function __construct(PermissionCategoryService $permissionCategoryServiceService,RoleService $roleService)
    {
        $this->permissionCategoryService = $permissionCategoryServiceService;
        $this->roleService = $roleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $roles = $this->roleService->paginate(10);
        return view('admin.pages.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $permissionCategories = $this->permissionCategoryService->getAll();
        return view('admin.pages.role.create', compact('permissionCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRoleRequest $request)
    {
        $this->roleService->create($request);
        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $role = $this->roleService->getById($id);
        $permissionCategories = $this->permissionCategoryService->getAll();
        return view('admin.pages.role.edit', compact('role', 'permissionCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRolePermissionRequest $request, $id)
    {
        $this->roleService->update($request, $id);
        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
