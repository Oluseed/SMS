<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    // protected function authenticate(Request $request, Closure $next, ...$guards)
    // {
    //     foreach ($guards as $guard) {
    //         if ($this->auth->guard($guard)->check()) {
    //             return $this->auth->shouldUse($guard);
    //         };
    //     }
    // }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if (/*Auth::check() && */$request->session()->has('model_name')) {
    //         $model_name = session('model_name');

    //         return $next($request);
    //     }
    // }
}
