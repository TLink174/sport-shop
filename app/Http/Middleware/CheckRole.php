<?php

namespace App\Http\Middleware;

use App\Http\Services\UserService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    private UserService $userService;


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()->isAdmin()){
            return $next($request);
        }
        else{
            return redirect()->route('home.index') ;
        }

    }
}
