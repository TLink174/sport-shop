<?php

namespace App\Http\Services;

use App\Models\Role;
use Illuminate\Support\Str;

class RoleService
{
    private Role $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }
    public function getAll()
    {
        return $this->role->all();
    }
    public function getById($id)
    {
        return $this->role->find($id);
    }
    public function paginate($perPage)
    {
        return $this->role->paginate($perPage);
    }
    public function create($request)
    {
        $roleCreate = $this->role->firstOrCreate([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description??null,
        ]);
        $roleCreate->permissions()->attach($request->permissions);
    }

    public function update( $request, $id)
    {
        $roleUpdate = $this->role->find($id);
        $roleUpdate->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description??null,
        ]);
        $roleUpdate->permissions()->sync($request->permissions);
    }
    public function delete($id)
    {
        $this->role->find($id)->delete();
    }


}
