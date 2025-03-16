<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!empty(Auth::check()))
        {
            return $next($request);
        }
        else
        {
            Auth::logout();
            return redirect(url(''));
        }

    }
}
