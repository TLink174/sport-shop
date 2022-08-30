<?php

namespace App\Http\Services;

use App\Models\Permission;
use Illuminate\Support\Str;

class PermissionService
{
    private PermissionCategoryService $permissionCategoryService;
    private Permission $permission;

    public function __construct(Permission $permission, PermissionCategoryService $permissionCategoryService)
    {
        $this->permission = $permission;
        $this->permissionCategoryService = $permissionCategoryService;
    }

    public function getAll()
    {
        return $this->permission->all();
    }

    public function getById($id)
    {
        return $this->permission->find($id);
    }

    public function paginate($perPage)
    {
        return $this->permission->paginate($perPage);
    }

    public function create($request)
    {
        return $this->permission->create([
            $category =
                'name' => $request->name,
            'id_permission_category' => $request->id_permission_category,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);
    }

    public function createMany($request)
    {
        return $this->permission->createMany($request);
    }

    public function createPemission($request)
    {
        if (isset($request->permissions)) {
            $categoryPermission = $this->permissionCategoryService->getById($request->id_permission_category);
            foreach ($request->permissions as $permission) {
                $this->permission->firstOrCreate([
                    'name' => ucfirst($permission) . ' ' . ucfirst($categoryPermission->name),
                    'id_permission_category' => $request->id_permission_category,
                    'value' => strtolower($permission),
                    'slug' => Str::slug(ucfirst($permission) . ' ' . ucfirst($categoryPermission->name)),
                    'description' => ucfirst($permission) . ' ' . ucfirst($categoryPermission->name),
                ]);
            }
        }
    }

}
