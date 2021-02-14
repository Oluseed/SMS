<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    public function index(Request $request){
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Post and check announcements on your teacher portal at Students Result Management System',
            'keywords' => 'Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Announcements',
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
                        ->select('SELECT announcements.*, teachers.name FROM announcements, teachers WHERE announcements.teacher_id = teachers.id ORDER BY announcements.created_at DESC');
        
        if ($data != []) {
            $datas = $data;
        } else {
            $datas = '';
        }

        // Return view with datas
        return view('teacher.announcement', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => '',
            'data' => $datas
        ]);
    }

    public function store(Request $request) {
        
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
        $teacher_id = $user->id;
        $recipient = $request->input('class');
        $title = $request->input('title');
        $story = $request->input('story');

        DB::connection($school->school_database)
                        ->insert('INSERT INTO announcements (teacher_id, class, title, story) VALUES (?, ?, ?, ?)', [$teacher_id, $recipient, $title, $story]);
        
        // Redirect
        return redirect(route('teacher.announcement'));
    }

    public function edit(Request $request, $id)
    {
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Edit and Post announcements on your teacher portal at Students Result Management System',
            'keywords' => 'Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Announcements',
            'body_pics' => 'body2'
        ];
        // Redirect if session schooldata isset
        if (!$request->session()->has('schoolData')) {
            return redirect('/select_school');
        }
        // Get model_name
        $model_name = session('model_name');

        //Get form value content
        $school = session('schoolData');
        $form = DB::connection($school->school_database)
                        ->select('SELECT * FROM announcements WHERE id = ?', [$id]);
        $form[0]->id = $id;
        
        // Get page data content from database
        $data = DB::connection($school->school_database)
                        ->select('SELECT announcements.*, teachers.name FROM announcements, teachers WHERE announcements.teacher_id = teachers.id ORDER BY announcements.created_at DESC');
        
        if ($data != []) {
            $datas = $data;
        } else {
            $datas = '';
        }

        // Return view with datas
        return view('teacher.announcement', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => $form[0],
            'data' => $datas
        ]);
    }

    public function update(Request $request, $id) 
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
        $recipient = $request->input('class');
        $title = $request->input('title');
        $story = $request->input('story');

        DB::connection($school->school_database)
                        ->update('UPDATE announcements SET class = :class, title = :title, story = :story WHERE id =:id', [
                            'class' => $recipient,
                            'title' => $title,
                            'story' => $story,
                            'id' => $id
                        ]);
        
        // Redirect 
        return redirect(route('teacher.announcement'));
    }

    public function destroy(Request $request, $id) 
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
        
        DB::connection($school->school_database)
                        ->delete('DELETE FROM announcements WHERE id = ?', [$id]);
        
        // Redirect 
        return redirect(route('teacher.announcement'));
    }
}
