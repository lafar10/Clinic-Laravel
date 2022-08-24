<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && (auth()->user()->role_as == '0' || auth()->user()->role_as == '2')) {
            return $next($request);
        } else {
            return redirect()->route('home')->with('error', 'Access Denied As You Are An Admin ^*^ !');
        }
    }
}
