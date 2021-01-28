<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthSchool
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
        if (Auth::check() && $request->session()->has('model_name')) {
            return $next($request);
        }
    }
}
