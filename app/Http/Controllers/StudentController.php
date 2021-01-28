<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
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
            'user' => Auth::user()
        ]);
    }

    public function show_announcements(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Read announcements on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Announcements',
            'body_pics' => 'body2'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.announcement', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::user()
        ]);
    }

    public function show_exam_result(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check exam result on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities',
            'body_pics' => 'body2'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.exam_result', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::user()
        ]);
    }

    public function show_lesson_files(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Open lesson files on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, lesson files',
            'body_pics' => 'body2'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.lesson_files', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::user()
        ]);
    }

    public function show_q_a(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Send a question and recieve answers on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Question and Answer',
            'body_pics' => 'body2'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.q&a', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::user()
        ]);
    }

    public function show_queWeek(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check question of the week on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Question of the week',
            'body_pics' => 'body2'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.queWeek', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::user()
        ]);
    }

    public function show_timetable(Request $request){
        $metadata = [
            'title' => '| STUDENT PORTAL',
            'description' => 'Check timetable on your student portal at Students Result Management System',
            'keywords' => 'Student, Result checker, Student portal, Student data, Student activities, Timetable',
            'body_pics' => 'body2'
        ];

        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        $model_name = session('schoolData')->school_code.'_student';


        return view('student.timetable', [
            'metadata' => $metadata,
            'model_name' => $model_name,
            'school' => session('schoolData'),
            'user' => Auth::user()
        ]);
    }
}