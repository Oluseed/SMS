<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;

class SRMSController extends Controller
{
    
    public function index(Request $request){
        $metadata = [
            'title' => 'HOME | SRMS',
            'description' => 'Students Result Management System',
            'keywords' => 'Students, Result checker'
        ];

        if (Auth::check()) {
            $school = session('schoolData');
            $school_code = $school->school_code;
            $model_name = $school_code.'_student';

            Auth::guard($model_name)->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();
        }

        return view('index', ['metadata' => $metadata]);
    }

    public function show_school(){
        $metadata = [
            'title' => 'SCHOOL LIST | SRMS',
            'description' => 'Login to or select school portal at Students Result Management System',
            'keywords' => 'Students, Result checker, Select School, Choose school, School list'
        ];

        $schools = School::all();

        return view('school_login', [
            'metadata' => $metadata,
            'schools' => $schools
        ]);
    }

    public function index_schoolHomepage(Request $request){
        $metadata = [
            'title' => 'Unique Academics | HOMEPAGE',
            'description' => 'Welcome to your school homepage at Students Result Management System',
            'keywords' => 'Students, Result checker, School Homepage, School index Page'
        ];
        $school_name = $request->input('school_name');
        $school = School::findOrFail($school_name);

        session(['schoolData' => $school]);

        return view('homepage', [
            'metadata' => $metadata,
            'school' => $school
        ]);
    }
}
