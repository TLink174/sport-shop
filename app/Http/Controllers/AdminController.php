<?php

namespace App\Http\Controllers;



use App\Http\Services\CartService;
use App\Http\Services\CategoryProductService;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private CartService $cartService;
    private UserService $userService;

    public function __construct(UserService $userService, CartService $cartService)
    {
        $this->userService = $userService;
        $this->cartService = $cartService;
    }

    public function index()
    {
        return view('admin.pages.index');
    }

    public function login()
    {
        return view('admin.pages.auth.login');
    }

    public function loginPost(Request $request)
    {
        $user = $this->userService->checkLogin($request->email, $request->password);
        if ($user) {
            auth()->login($user);
            return redirect()->route('admin.index');
        } elseif ($user == false) {
            return redirect()->route('admin.auth.login')->with('error', 'Email or password is incorrect');
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.auth.login');
    }

    public function register()
    {
        return view('admin.pages.auth.register');
    }

    public function registerPost(Request $request)
    {
//        $request->validate([
//            'name' => 'required|min:3',
//            'email' => 'required|email|unique:users',
//            'password' => 'required|min:6|confirmed'
//        ]);
        $user = $this->userService->register($request);
        $this->cartService->create($this->userService->getByEmail($request->email)->id);
        if ($user) {
            //set auth user

            auth()->login($user);
            return redirect()->route('admin.auth.login')->with('success', 'Register success');

        } else {
            return redirect()->route('admin.auth.register')->with('error', 'Register failed');
        }
    }
    public function fileManager()
    {
        return view('admin.pages.file_manager.index');
    }

}
