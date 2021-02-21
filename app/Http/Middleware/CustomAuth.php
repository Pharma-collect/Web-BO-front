<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has("token")) {
            session()->flush();

            return redirect('/client');
        }

        return $next($request);
    }
}
