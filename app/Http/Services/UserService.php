<?php

namespace App\Http\Services;

use App\Models\User;

class UserService
{
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

}
