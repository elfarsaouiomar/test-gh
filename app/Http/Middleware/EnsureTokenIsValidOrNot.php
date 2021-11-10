<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValidOrNot
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
     function handle(Request $request, Closure $next)
    {
        return $next($request);
    }





    public function index(Type $var = null)
    {
        return true;
    }
}
