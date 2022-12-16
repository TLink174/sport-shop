<?php

namespace App\Http\Services;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private User $user;
    private Cart $cart;

    public function __construct(User $user, Cart $cart)
    {
        $this->user = $user;
        $this->cart = $cart;
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
            'password' => $this->hashPassword($request->password),
        ]);
        return $userCreate;
    }

    public function create($request)
    {
        $userCreated = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $this->hashPassword($request->password),
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
    public function hashPassword($password)
    {
        return hash::make($password);
    }

//    public function getPermissions($id)
//    {
//        $user = $this->user->find($id);
//        $roles = $user->roles;
//        $permissions = [];
//        foreach ($roles as $role) {
//            foreach ($role->permissions as $permission) {
//                $permissions[] = $permission->value;
//            }
//        }
//        return $permissions;
//    }
}
