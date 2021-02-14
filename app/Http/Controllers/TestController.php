<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Check and post test result on your teacher portal at Students Result Management System',
            'keywords' => 'Teacher, Result checker, Teacher portal, Student data, Student activities, Test Result',
            'body_pics' => 'body2'
        ];
        // Redirect if session schooldata isset
        // if (!$request->session()->has('schoolData')) {
        //     return redirect('/select_school');
        // }
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();

        if ($user->class_teacher != '') {
            $data = DB::connection($school->school_database)
                            ->select('SELECT students.id, students.name, test_results.student_id, students.class FROM students, test_results WHERE students.id != test_results.student_id AND (test_results.class = :clas AND students.class = :class)', [
                                'clas' => $user->class_teacher, 'class' => $user->class_teacher]);
        
            $data2 = DB::connection($school->school_database)
                            ->select('SELECT students.id, students.name, test_results.student_id, test_results.class FROM students, test_results WHERE students.id = test_results.student_id AND test_results.class = :class', [
                                'class' => $user->class_teacher]);
        }
        // Return view with datas
        return view('teacher.test_result', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data ?? '',
            'data2' => $data2 ?? '',
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
