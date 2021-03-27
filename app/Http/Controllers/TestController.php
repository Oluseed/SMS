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
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Student data, Student activities, Test Result',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();

        if ($user->class_teacher != '') {
            // Those with unposted result 
            $data = DB::connection($school->school_database)
                            ->select('SELECT name FROM students WHERE class = ?', [
                                $user->class_teacher
                            ]);
            // Those with posted result
            $data2 = DB::connection($school->school_database)
                            ->select('SELECT students.id, students.name, test_results.student_id, test_results.class FROM students, test_results WHERE students.id = test_results.student_id AND test_results.class = :class', [
                                'class' => $user->class_teacher
                            ]);
        }
        // Return view with datas
        return view('teacher.test.test_result', [
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
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database 
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        $id = DB::connection($school->school_database)
                            ->select('SELECT id FROM students WHERE name = ?', [$request->input('student_name')]);
        // If Student Name Does not Match Database
        if ($id == null) {
            return redirect()->route('teacher.test_result')->with('message', 'Student name does not match, please select the student from the list!!!');
        }
        // If Result Has Already Been Posted
        $test_result_id = DB::connection($school->school_database)
                            ->select('SELECT id FROM test_results WHERE student_id = ?', [$id[0]->id]);
        if ($test_result_id != null) {
            return redirect()->route('teacher.test_result')->with('message', $request->input('student_name').'\'s result has already been posted!!!');
        }
        
        // Get Data And Insert
        $student_id = $id[0]->id;
        $class = $user->class_teacher;
        $term = $school->school_term;
        if ($request->filled('row1a')) {
            $sub1 = $request->input('row1a').', '.$request->input('row1b').', '.$request->input('row1c').', '.$request->input('row1d');
        }else{$sub1 = null;}
        if ($request->filled('row2a')) {
            $sub2 = $request->input('row2a').', '.$request->input('row2b').', '.$request->input('row2c').', '.$request->input('row2d');
        }else{$sub2 = null;}
        if ($request->filled('row3a')) {
            $sub3 = $request->input('row3a').', '.$request->input('row3b').', '.$request->input('row3c').', '.$request->input('row3d');
        }else{$sub3 = null;}
        if ($request->filled('row4a')) {
            $sub4 = $request->input('row4a').', '.$request->input('row4b').', '.$request->input('row4c').', '.$request->input('row4d');
        }else{$sub4 = null;}
        if ($request->filled('row5a')) {
            $sub5 = $request->input('row5a').', '.$request->input('row5b').', '.$request->input('row5c').', '.$request->input('row5d');
        }else{$sub5 = null;}
        if ($request->filled('row6a')) {
            $sub6 = $request->input('row6a').', '.$request->input('row6b').', '.$request->input('row6c').', '.$request->input('row6d');
        }else{$sub6 = null;}
        if ($request->filled('row7a')) {
            $sub7 = $request->input('row7a').', '.$request->input('row7b').', '.$request->input('row7c').', '.$request->input('row7d');
        }else{$sub7 = null;}
        if ($request->filled('row8a')) {
            $sub8 = $request->input('row8a').', '.$request->input('row8b').', '.$request->input('row8c').', '.$request->input('row8d');
        }else{$sub8 = null;}
        if ($request->filled('row9a')) {
            $sub9 = $request->input('row9a').', '.$request->input('row9b').', '.$request->input('row9c').', '.$request->input('row9d');
        }else{$sub9 = null;}
        if ($request->filled('row10a')) {
            $sub10 = $request->input('row10a').', '.$request->input('row10b').', '.$request->input('row10c').', '.$request->input('row10d');
        }else{$sub10 = null;}       
        if ($request->filled('row11a')) {
            $sub11 = $request->input('row11a').', '.$request->input('row11b').', '.$request->input('row11c').', '.$request->input('row11d');
        }else{$sub11 = null;}       
        if ($request->filled('row12a')) {
            $sub12 = $request->input('row12a').', '.$request->input('row12b').', '.$request->input('row12c').', '.$request->input('row12d');
        }else{$sub12 = null;}       
        if ($request->filled('row13a')) {
            $sub13 = $request->input('row13a').', '.$request->input('row13b').', '.$request->input('row13c').', '.$request->input('row13d');
        }else{$sub13 = null;}        
        if ($request->filled('row14a')) {
            $sub14 = $request->input('row14a').', '.$request->input('row14b').', '.$request->input('row14c').', '.$request->input('row14d');
        }else{$sub14 = null;}        
        if ($request->filled('row15a')) {
            $sub15 = $request->input('row15a').', '.$request->input('row15b').', '.$request->input('row15c').', '.$request->input('row15d');
        }else{$sub15 = null;}

        DB::connection($school->school_database)
                        ->insert('INSERT INTO test_results (student_id, class, term_session, sub1, sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9, sub10, sub11, sub12, sub13, sub14, sub15) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                                $student_id, $class, $term, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $sub8, $sub9, $sub10, $sub11, $sub12, $sub13, $sub14, $sub15
                            ]);
        
        // Redirect
        return redirect()->route('teacher.test_result')->with('message', $request->input('student_name').'\'s result has been posted sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Check and post test result on your teacher portal at Students Result Management System',
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Student data, Student activities, Test Result',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        if ($user->class_teacher != '') {
            $data = DB::connection($school->school_database)
                            ->select('SELECT students.name, test_results.* FROM students, test_results WHERE students.id = test_results.student_id AND students.name = :name', [
                                'name' => $id]);
        }
        // Return view with datas
        return view('teacher.test.test_result_show', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data[0],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Edit and post test result on your teacher portal at Students Result Management System',
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Student data, Student activities, Test Result Edit',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();

        if ($user->class_teacher != '') {
            // Those with unposted result 
            $data = DB::connection($school->school_database)
                            ->select('SELECT students.name, test_results.* FROM students, test_results WHERE students.id = test_results.student_id AND test_results.id = ?', [$id]);
        }
        foreach (explode(',', $data[0]->sub1) as $row) {
            $sub1[] = $row;
        }
        foreach (explode(',', $data[0]->sub2) as $row) {
            $sub2[] = $row;
        }
        foreach (explode(',', $data[0]->sub3) as $row) {
            $sub3[] = $row;
        }
        foreach (explode(',', $data[0]->sub4) as $row) {
            $sub4[] = $row;
        }
        foreach (explode(',', $data[0]->sub5) as $row) {
            $sub5[] = $row;
        }
        foreach (explode(',', $data[0]->sub6) as $row) {
            $sub6[] = $row;
        }
        foreach (explode(',', $data[0]->sub7) as $row) {
            $sub7[] = $row;
        }
        foreach (explode(',', $data[0]->sub8) as $row) {
            $sub8[] = $row;
        }
        foreach (explode(',', $data[0]->sub9) as $row) {
            $sub9[] = $row;
        }
        foreach (explode(',', $data[0]->sub10) as $row) {
            $sub10[] = $row;
        }
        foreach (explode(',', $data[0]->sub11) as $row) {
            $sub11[] = $row;
        }
        foreach (explode(',', $data[0]->sub12) as $row) {
            $sub12[] = $row;
        }
        foreach (explode(',', $data[0]->sub13) as $row) {
            $sub13[] = $row;
        }
        foreach (explode(',', $data[0]->sub14) as $row) {
            $sub14[] = $row;
        }
        foreach (explode(',', $data[0]->sub15) as $row) {
            $sub15[] = $row;
        }
        $name = $data[0]->name;
        $class = $data[0]->class;

        $data = compact('name', 'class', 'sub1', 'sub2', 'sub3', 'sub4', 'sub5', 'sub6', 'sub7', 'sub8', 'sub9', 'sub10', 'sub11', 'sub12', 'sub13', 'sub14', 'sub15');
        
        // Return view with datas
        return view('teacher.test.test_result_edit', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name, $class)
    {
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database 
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        $student_id = DB::connection($school->school_database)
                            ->select('SELECT id, name FROM students WHERE name = ?', [$name]);
        // If Student Name Does not Match Database
        if ($student_id == null) {
            return redirect()->route('teacher.test_result')->with('message', 'Student name does not match, please select the student from the list!!!');
        }
        // If Result Has Already Been Posted
        $test_result_id = DB::connection($school->school_database)
                            ->select('SELECT id FROM test_results WHERE student_id = ?', [$student_id[0]->id]);
        if ($test_result_id == null) {
            return redirect()->route('teacher.test_result')->with('message', $student_id[0]->name.'\'s result has not been posted yet!!!');
        }
        
        // Get Data And Insert
        $name = $student_id[0]->name;
        $test_result_id = $test_result_id[0]->id;
        $student_id = $student_id[0]->id;
        $class = $user->class_teacher;
        $term = $school->school_term;
        if ($request->filled('row1a')) {
            $sub1 = $request->input('row1a').', '.$request->input('row1b').', '.$request->input('row1c').', '.$request->input('row1d');
        }else{$sub1 = null;}
        if ($request->filled('row2a')) {
            $sub2 = $request->input('row2a').', '.$request->input('row2b').', '.$request->input('row2c').', '.$request->input('row2d');
        }else{$sub2 = null;}
        if ($request->filled('row3a')) {
            $sub3 = $request->input('row3a').', '.$request->input('row3b').', '.$request->input('row3c').', '.$request->input('row3d');
        }else{$sub3 = null;}
        if ($request->filled('row4a')) {
            $sub4 = $request->input('row4a').', '.$request->input('row4b').', '.$request->input('row4c').', '.$request->input('row4d');
        }else{$sub4 = null;}
        if ($request->filled('row5a')) {
            $sub5 = $request->input('row5a').', '.$request->input('row5b').', '.$request->input('row5c').', '.$request->input('row5d');
        }else{$sub5 = null;}
        if ($request->filled('row6a')) {
            $sub6 = $request->input('row6a').', '.$request->input('row6b').', '.$request->input('row6c').', '.$request->input('row6d');
        }else{$sub6 = null;}
        if ($request->filled('row7a')) {
            $sub7 = $request->input('row7a').', '.$request->input('row7b').', '.$request->input('row7c').', '.$request->input('row7d');
        }else{$sub7 = null;}
        if ($request->filled('row8a')) {
            $sub8 = $request->input('row8a').', '.$request->input('row8b').', '.$request->input('row8c').', '.$request->input('row8d');
        }else{$sub8 = null;}
        if ($request->filled('row9a')) {
            $sub9 = $request->input('row9a').', '.$request->input('row9b').', '.$request->input('row9c').', '.$request->input('row9d');
        }else{$sub9 = null;}
        if ($request->filled('row10a')) {
            $sub10 = $request->input('row10a').', '.$request->input('row10b').', '.$request->input('row10c').', '.$request->input('row10d');
        }else{$sub10 = null;}       
        if ($request->filled('row11a')) {
            $sub11 = $request->input('row11a').', '.$request->input('row11b').', '.$request->input('row11c').', '.$request->input('row11d');
        }else{$sub11 = null;}       
        if ($request->filled('row12a')) {
            $sub12 = $request->input('row12a').', '.$request->input('row12b').', '.$request->input('row12c').', '.$request->input('row12d');
        }else{$sub12 = null;}       
        if ($request->filled('row13a')) {
            $sub13 = $request->input('row13a').', '.$request->input('row13b').', '.$request->input('row13c').', '.$request->input('row13d');
        }else{$sub13 = null;}        
        if ($request->filled('row14a')) {
            $sub14 = $request->input('row14a').', '.$request->input('row14b').', '.$request->input('row14c').', '.$request->input('row14d');
        }else{$sub14 = null;}        
        if ($request->filled('row15a')) {
            $sub15 = $request->input('row15a').', '.$request->input('row15b').', '.$request->input('row15c').', '.$request->input('row15d');
        }else{$sub15 = null;}

        DB::connection($school->school_database)
                ->update('UPDATE test_results SET student_id = :student_id, class = :class, term_session = :term, sub1 = :sub1, sub2 = :sub2, sub3 = :sub3,
                     sub4 = :sub4, sub5 = :sub5, sub6 = :sub6, sub7 = :sub7, sub8 = :sub8, sub9 = :sub9, sub10 = :sub10, sub11 = :sub11,
                     sub12 = :sub12, sub13 = :sub13, sub14 = :sub14, sub15 = :sub15 WHERE id =:id', [
                        'student_id' => $student_id, 'class' => $class, 'term' => $term, 'sub1' => $sub1, 'sub2' => $sub2, 'sub3' => $sub3, 'sub4' => $sub4,
                        'sub5' => $sub5, 'sub6' => $sub6, 'sub7' => $sub7, 'sub8' => $sub8, 'sub9' => $sub9, 'sub10' => $sub10, 'sub11' => $sub11, 
                        'sub12' => $sub12, 'sub13' => $sub13, 'sub14' => $sub14, 'sub15' => $sub15, 'id' => $test_result_id
                    ]);
        
        // Redirect
        return redirect()->route('teacher.test_result')->with('message', $name.'\'s result has been updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $name)
    {
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        DB::connection($school->school_database)
                        ->delete('DELETE FROM test_results WHERE id = ?', [$request->input('row_id')]);
        
        // Redirect 
        return redirect()->route('teacher.test_result')->with('message', $name.'\'s test result has been deleted successfully!!!');
    }
}