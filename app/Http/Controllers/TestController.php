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
            // Those with unposted result 
            $data = DB::connection($school->school_database)
                            ->select('SELECT students.id, students.name, students.class FROM students, test_results WHERE students.id != test_results.student_id AND (test_results.class = :clas AND students.class = :class)', [
                                'clas' => $user->class_teacher, 'class' => $user->class_teacher]);
            // Those with posted result
            $data2 = DB::connection($school->school_database)
                            ->select('SELECT students.id, students.name, test_results.student_id, test_results.class FROM students, test_results WHERE students.id = test_results.student_id AND test_results.class = :class', [
                                'class' => $user->class_teacher]);
        }
        // Return view with datas
        return view('teacher.test_result', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data ?? 'empty',
            'data2' => $data2 ?? 'empty',
            'message' => session('message') ?? '',
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
        // Redirect if session schooldata isset
        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        // Get Data And Insert
        $id = DB::connection($school->school_database)
                            ->select('SELECT id FROM students WHERE name = ?', [$request->input('student_name')]);
        if ($id == null) {
            return redirect()->route('teacher.timetable')->with('message', 'Student name does not match, please select the student from the list');
        }
        
        $student_id = $id[0]->id;
        $class = $user->class_teacher;
        $term = $school->school_term;
        $sub1 = $request->input('row1a').', '.$request->input('row1b').', '.$request->input('row1c').', '.$request->input('row1d');
        $sub2 = $request->input('row2a').', '.$request->input('row2b').', '.$request->input('row2c').', '.$request->input('row2d');
        $sub3 = $request->input('row3a').', '.$request->input('row3b').', '.$request->input('row3c').', '.$request->input('row3d');
        $sub4 = $request->input('row4a').', '.$request->input('row4b').', '.$request->input('row4c').', '.$request->input('row4d');
        $sub5 = $request->input('row5a').', '.$request->input('row5b').', '.$request->input('row5c').', '.$request->input('row5d');
        $sub6 = $request->input('row6a').', '.$request->input('row6b').', '.$request->input('row6c').', '.$request->input('row6d');
        $sub7 = $request->input('row7a').', '.$request->input('row7b').', '.$request->input('row7c').', '.$request->input('row7d');
        $sub8 = $request->input('row8a').', '.$request->input('row8b').', '.$request->input('row8c').', '.$request->input('row8d');
        $sub9 = $request->input('row9a').', '.$request->input('row9b').', '.$request->input('row9c').', '.$request->input('row9d');
        $sub10 = $request->input('row10a').', '.$request->input('row10b').', '.$request->input('row10c').', '.$request->input('row10d');
        $sub11 = $request->input('row11a').', '.$request->input('row11b').', '.$request->input('row11c').', '.$request->input('row11d');
        $sub12 = $request->input('row12a').', '.$request->input('row12b').', '.$request->input('row12c').', '.$request->input('row12d');
        $sub13 = $request->input('row13a').', '.$request->input('row13b').', '.$request->input('row13c').', '.$request->input('row13d');
        $sub14 = $request->input('row14a').', '.$request->input('row14b').', '.$request->input('row14c').', '.$request->input('row14d');
        $sub15 = $request->input('row15a').', '.$request->input('row15b').', '.$request->input('row15c').', '.$request->input('row15d');

        DB::connection($school->school_database)
                        ->insert('INSERT INTO test_results (student_id, class, term_session, sub1, sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9, sub10, sub11, sub12, sub13, sub14, sub15) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                            $student_id, $class, $term, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $sub8, $sub9, $sub10, $sub11, $sub12, $sub13, $sub14, $sub15
                        ]);
        
        // Redirect
        return redirect()->route('teacher.test_result')->with('message', $request->input('student_name').' result has been posted sucessfully');
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
