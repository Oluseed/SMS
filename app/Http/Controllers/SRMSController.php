<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;

class SRMSController extends Controller
{
    
    public function index(Request $request){
        $metadata = [
            'title' => 'HOME | SRMS',
            'description' => 'Students Result Management System',
            'keywords' => 'Students, Result checker'
        ];

        if (Auth::check() || $request->session()->exists('schoolData')) {
            $model_name = session('model_name');

            Auth::guard($model_name)->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();
        }

        return view('index', ['metadata' => $metadata]);
    }

    public function show_school(Request $request){
        $metadata = [
            'title' => 'SCHOOL LIST | SRMS',
            'description' => 'Login to or select school portal at Students Result Management System',
            'keywords' => 'Students, Result checker, Select School, Choose school, School list'
        ];

        if (Auth::check() || $request->session()->exists('schoolData')) {
            $model_name = session('model_name');

            Auth::guard($model_name)->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();
        }

        $schools = School::all();

        return view('school_login', [
            'metadata' => $metadata,
            'schools' => $schools
        ]);
    }

    public function create_school(Request $request){
        if (Auth::check() || $request->session()->exists('schoolData')) {
            $model_name = session('model_name');

            Auth::guard($model_name)->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();
        }
        // Request input, Find schooldata, Redirect if find fails, Get School Database
        $school_name = $request->input('school_name');
        $srms_school = School::find($school_name);

        if (!$srms_school) {
            return redirect(RouteServiceProvider::SCHOOLLOGIN);
        }
        
        $school = DB::connection($srms_school->school_database)
                        ->select('SELECT * FROM schools');
        
        // Set $school and School database as session variables
        session(['schoolData' => $school[0]]);

        return redirect(route('school.portal'));
    }

    public function index_schoolHomepage(Request $request){
        $metadata = [
            'title' => '| HOMEPAGE',
            'description' => 'Welcome to your school homepage at Students Result Management System',
            'keywords' => 'Students, Result checker, School Homepage, School index Page'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        
        return view('homepage', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
        ]);
    }
}
