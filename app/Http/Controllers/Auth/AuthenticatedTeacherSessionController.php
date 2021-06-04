<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedTeacherSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $metadata = [
            'title' => '| TEACHER LOGIN',
            'description' => 'Login to your teacher portal at Students Result Management System',
            'keywords' => 'Teacher, Result checker, Teacher login, Login page, Teacher form'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }

        return view('auth.teacher-login', [
            'metadata' => $metadata,
            'school' => session('schoolData')
        ]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        session(['role' => 'teacher']);
        
        $request->authenticate();

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $request->session()->regenerate();

        return redirect(RouteServiceProvider::HOMETEACHER);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $school = session('schoolData')->school_code;
        $model_name = $school.'_teacher';
        
        Auth::guard($model_name)->logout();

        // $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(RouteServiceProvider::TEACHERLOGIN);
    }
}
