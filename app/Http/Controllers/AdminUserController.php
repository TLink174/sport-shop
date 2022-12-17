<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

use App\Http\Services\RoleService;
use App\Http\Services\UserService;
use App\Models\User;
use App\Http\Services\cartService;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private UserService $userService;
    private RoleService $roleService;
    private CartService $cartService;

    public function __construct(UserService $userService, RoleService $roleService,CartService $cartService)
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
        $this->cartService = $cartService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = $this->userService->paginate(10);
        return view('admin.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roles = $this->roleService->getAll();
        return view('admin.pages.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        $this->userService->create($request);
        dd($this->userService->getByEmail($request->email)->id);
        $this->cartService->create($this->userService->getByEmail($request->email)->id);
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = $this->userService->find($id);
        $roles = $this->roleService->getAll();

        return view('admin.pages.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $this->userService->update($request, $id);
        return redirect()->route('admin.users.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->userService->delete($id);
        return redirect()->route('admin.users.index');
    }
    public function restore($id)
    {
        $this->userService->restore($id);
        return redirect()->route('admin.users.index');
    }
}
