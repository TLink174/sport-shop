<?php

namespace App\Http\Services;

use App\Models\User;

class UserService
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function checkLogin($email, $password)
    {
        $user = $this->user->where('email', $email)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    public function register($request)
    {
        $userCreate = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return $userCreate;
    }

    public function create($request)
    {
        $userCreated = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $userCreated->roles()->attach($request->roles);
        return $userCreated;
    }

    public function update($request, $id)
    {
        $user = $this->user->find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $user->roles()->sync($request->roles);
        return $user;
    }

    public function delete($id)
    {
        $user = $this->getById($id);
        $user->delete();
        return $user;
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function getById($id)
    {
        return $this->user->find($id);
    }

    public function getByEmail($email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function paginate($int)
    {
        return $this->user->paginate($int);
    }

    public function find($id)
    {
        return $this->user->find($id);
    }

    public function getPermissions($id)
    {
        $user = $this->user->find($id);
        $roles = $user->roles;
        $permissions = [];
        foreach ($roles as $role) {
            foreach ($role->permissions as $permission) {
                $permissions[] = $permission->value;
            }
        }
        return $permissions;
    }


}
