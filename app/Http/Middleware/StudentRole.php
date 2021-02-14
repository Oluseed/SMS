<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentRole
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
        if (!$request->session()->has('schoolData')) {
            return redirect()->url('/select_school');
        }
        $school = session('schoolData')->school_code;
        $name = $school.'_student';
        
        if (!Auth::guard($name)->check()) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
