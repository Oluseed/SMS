<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function __construct(Request $request) 
    {
        $this->middleware(function ($request, $next) {
            if (!$request->session()->has('schoolData')) {
                return redirect('/select_school');
            }
            $school = session('schoolData');
            $school_code = $school->school_code;
            $role = session('role');
            $this->model_name = 'auth'.$school_code.'_'.$role;

            return $next($request);
        });
    }

    public function index(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Welcome to your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Information, Student portal, Student data, Student activities',
            'body_pics' => 'body2'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.student', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user()
        ]);
    }

    public function show_announcements(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Read announcements on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Announcements',
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
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM announcements ORDER BY created_at DESC');

        // Return view with datas
        return view('student.announcement', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data
        ]);
    }

    public function show_timetable(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check timetable on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Timetable',
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
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables');

        // Return view with datas
        return view('student.timetable', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data
        ]);
    }

    public function show_test_result(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check test result on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities',
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
        $user = Auth::guard($model_name)->user();
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM test_results WHERE student_id = '.$user->id);
        
        // Return view with datas
        return view('student.test_result', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data[0]
        ]);
    }

    public function show_exam_result(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check exam result on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities',
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
        $user = Auth::guard($model_name)->user();
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM exam_results WHERE student_id = '.$user->id);
        
        // Return view with datas
        return view('student.test_result', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data[0]
        ]);
    }

    public function show_lesson_files(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Open lesson files on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, lesson files',
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
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM announcements');

        // Return view with datas
        return view('student.lesson_files', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data
        ]);
    }

    public function show_q_a(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Send a question and recieve answers on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Question and Answer',
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
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM announcements');

        // Return view with datas
        return view('student.q&a', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data
        ]);
    }

    public function show_queWeek(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check question of the week on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Question of the week',
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
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM announcements');

        // Return view with datas
        return view('student.queWeek', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $data
        ]);
    }
}
