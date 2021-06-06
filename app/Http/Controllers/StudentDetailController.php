<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class StudentDetailController extends Controller
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
            'description' => 'Check Student Details on your teacher portal at Students Result Management System',
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Student data, Student activities, Details',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        
        // Return view with datas
        return view('teacher.studentDetails.student_details', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'message' => session('message') ?? ''
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
        
        // Authenticate Inputs
        $request->validate([
            'name' => 'required|string|max:255|min:7',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required|string',
            'password' => 'required|string|confirmed|min:7',
        ]);

        // Get Input Data 
        $name = $request->input('name');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $password = Hash::make($request->input('password'));
        $class = $user->class_teacher;
        $reg_no = '...';
        
        // Insert
        DB::connection($school->school_database)
            ->insert('INSERT INTO students (name, regno, class, gender, email, password) 
                    VALUES (?, ?, ?, ?, ?, ?)', [$name, $reg_no, $class, $gender, $email, $password]);
        
        // Set-Up Student Reg-No
        $max_id = DB::connection($school->school_database)
                    ->select('SELECT MAX(id) AS id FROM students');
        
        $school_code = Str::upper($school->school_code);
        $year = $school->current_year;
        $index_no = $max_id[0]->id;
                
        function indexNo($index_no) {
            if (Str::length($index_no) == 1) {
                return '00'.$index_no;
            } elseif (Str::length($index_no) == 2) {
                return '0'.$index_no;
            } else {
                return $index_no;
            }
        }
        $new_index_no = indexNo($index_no);
        $reg_no = $school_code.'/'.$year.'/'.$new_index_no;

        DB::connection($school->school_database)
            ->update('UPDATE students SET regno = :regno WHERE id = :id', [
                'regno' => $reg_no,
                'id' => $index_no
            ]);

        // Redirect
        return redirect()->route('teacher.student_details.show', [
            'id' => $index_no,
        ])->with([
            'pass' => $request->input('password'),
            'message' => $name.' has been registered successfully'
        ]);
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
            'description' => 'View and check student personal details on your teacher portal at Students Result Management System',
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Teacher data, Details, Student, Check, Show, View',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        // Redirect if id != set
        if (empty($id)) {
            return redirect()->route('teacher.student_details');
        }
        // Get page data content from database
        $datas = DB::connection($school->school_database)
                        ->select('SELECT * FROM students WHERE id = ?', [$id]);
        
        $datas[0]->password = session('pass') ?? '*******';
        // Return view with datas
        return view('teacher.studentDetails.student_details_show', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $datas[0],
            'message' => session('message') ?? ''
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
