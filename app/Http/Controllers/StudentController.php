<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Welcome to your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Information, Student portal, Student data, Student activities',
            'body_pics' => 'body2'
        ];
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.student', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user()
        ]);
    }

    public function show_announcements(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Read announcements on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Announcements',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $data = DB::connection($school->school_database)
                        ->select('SELECT announcements.*, teachers.name FROM announcements, teachers WHERE announcements.teacher_id = teachers.id ORDER BY announcements.created_at DESC');
        
        if ($data != []) {
            $datas = $data;
        } 
        else {
            $datas = '';
        }
        // Return view with datas
        return view('student.announcement', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $datas
        ]);
    }

    public function show_timetable(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check timetable on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Timetable',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = ?', [$user->class]);

        if ($data != []) {
            $datas = $data;
        } else {
            $datas = '';
        }
        // Return view with datas
        return view('student.timetable', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => $user,
            'data' => $datas
        ]);
    }

    public function show_test_result(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check test result on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM test_results WHERE student_id = '.$user->id);
        
        if ($data != []) {
            $datas = $data[0];
        } else {
            $datas = '';
        }
        // Return view with datas
        return view('student.test_result', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $datas
        ]);
    }

    public function show_exam_result(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check exam result on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM exam_results WHERE student_id = '.$user->id);
        
        if ($data != []) {
            $datas = $data[0];
        } else {
            $datas = '';
        }
        // Return view with datas
        return view('student.exam_result', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'data' => $datas
        ]);
    }
    
    public function show_queWeek(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check question of the week on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Question of the week',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM queweek_show WHERE class = ?', [$user->class]);
        
        if ($data != []) {
            $datas = $data;
        } else {
            $datas = '';
        }
        // Return view with datas
        return view('student.queWeek', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => $user,
            'data' => $datas
        ]);
    }

    public function store_queWeek(Request $request)
    {
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();

        $question_id = $request->input('question_id');
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM queweek_show WHERE id = ?', [$question_id]);
        
        // Get Data And Insert
        $subject = $data[0]->subject;
        $teacher_id = $data[0]->teacher_id;
        $student_id = $user->id;
        $answer = $request->input('answer');

        DB::connection($school->school_database)
                        ->insert('INSERT INTO queweek_post (subject, teacher_id, student_id, answer) VALUES (?, ?, ?, ?)', [$subject, $teacher_id, $student_id, $answer]);
        // Redirect
        return redirect(route('student.queWeek'));
    }

    public function show_lesson_files(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Open lesson files on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, lesson files',
            'body_pics' => 'body2'
        ];
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

    public function show_message(Request $request)
    {
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Send a question and recieve answers on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Question and Answer',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        $data = DB::connection($school->school_database)
                        ->select('SELECT * FROM teacher_messages WHERE student_id = ?', [$user->id]);
        
        if ($data != []) {
            $datas = $data;
        } else {
            $datas = '';
        }
        // Return view with datas
        return view('student.message', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => $user,
            'data' => $datas
        ]);
    }

    public function store_message(Request $request)
    {
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        // Get Data And Insert
        $student_id = $user->id;
        $class = $user->class;
        $recipient = $request->input('recipient');
        $title = $request->input('title');
        $message = $request->input('message');

        DB::connection($school->school_database)
                        ->insert('INSERT INTO student_messages (student_id, class, recipient, title, message) VALUES (?, ?, ?, ?, ?)', [$student_id, $class, $recipient, $title, $message]);
        
        // Redirect
        return redirect(route('student.message'));
    }
}
