<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TimetableController extends Controller
{
    public function __construct(Request $request) 
    {
        $this->middleware(function ($request, $next) {
            if (!$request->session()->has('schoolData')) {
                return redirect('/select_school');
            }
            $school = session('schoolData');
            $school_code = $school->school_code;
            $name = $school_code.'_teacher';

            if (Auth::guard($name)->user() == '') {
                return redirect(route('teacher.login'));
            }
            $this->model_name = 'auth:'.$school_code.'_teacher';
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Post and check timetables on your teacher portal at Students Result Management System',
            'keywords' => 'Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Timetables',
            'body_pics' => 'body2'
        ];
        // Redirect if session schooldata isset
        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $jss1 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "jss 1" ORDER BY id ASC');

        $jss2 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "jss 2" ORDER BY id ASC');

        $jss3 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "jss 3" ORDER BY id ASC');

        $sss1 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "sss 1" ORDER BY id ASC');

        $sss2 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "sss 2" ORDER BY id ASC');

        $sss3 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "sss 3" ORDER BY id ASC');

        if ($jss1 != []) {
            $jss1s = $jss1;
        } else {
            $jss1s = '';
        }
        if ($jss2 != []) {
            $jss2s = $jss2;
        } else {
            $jss2s = '';
        }
        if ($jss3 != []) {
            $jss3s = $jss3;
        } else {
            $jss3s = '';
        }
        if ($sss1 != []) {
            $sss1s = $sss1;
        } else {
            $sss1s = '';
        }
        if ($sss2 != []) {
            $sss2s = $sss2;
        } else {
            $sss2s = '';
        }
        if ($sss3 != []) {
            $sss3s = $sss3;
        } else {
            $sss3s = '';
        }

        // Return view with datas
        return view('teacher.timetable', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => '',
            'jss1' => $jss1s,
            'jss2' => $jss2s,
            'jss3' => $jss3s,
            'sss1' => $sss1s,
            'sss2' => $sss2s,
            'sss3' => $sss3s,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
