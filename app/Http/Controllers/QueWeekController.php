<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

class QueWeekController extends Controller
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
            'description' => 'Post and check Question of the week on your teacher portal at Students Result Management System',
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Question, Week',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');
        $user = Auth::guard($model_name)->user();

        // Get page data content from database
        $school = session('schoolData');
        $class = $user->class_teacher;
        $user_id = $user->id;
        $data = DB::connection($school->school_database)
                        ->select('SELECT queweek_show.*, teachers.name, teachers.class_teacher FROM queweek_show, teachers 
                                WHERE (queweek_show.class = ? OR queweek_show.teacher_id = ?) 
                                AND queweek_show.teacher_id = teachers.id ORDER BY queweek_show.created_at DESC', [
                                    $user->class_teacher,
                                    $user->id
                                ]);//->SimplePaginate(2);
        // $data2 = DB::connection($school->school_database)
                        // ->table('queweek_show')
                        // ->join('teachers')
                        // ->select('queweek_show.*', 'teachers.name', 'teachers.class_teacher')
                        // ->where(function($query) use ($class, $user_id) {
                        //     $query->where('queweek_show.class', $class)
                        //         ->orWhere('queweek_show.teacher_id', $user_id);
                        // })
                        // ->where('queweek_show.teacher_id', 'teachers.id')
                        // ->get()->dd();
        $datas = ($data != []) ? $data : '';

        if ($datas != []) {
            foreach ($datas as $row) {
                $row->question = Str::of($row->question)->words(20);
            }
        }

        // Return view with datas
        return view('teacher.queWeek.queWeek', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => '',
            'data' => $datas,
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
        
        // Get Data And Insert
        $subject = $request->input('subject');
        $teacher_id = $user->id;
        $class = $request->input('class');
        $question = $request->input('question');

        DB::connection($school->school_database)
                        ->insert('INSERT INTO queweek_show (subject, teacher_id, class, question) 
                                VALUES (?, ?, ?, ?)', [$subject, $teacher_id, $class, $question]);
        
        $data = DB::connection($school->school_database)
                    ->select('SELECT MAX(id) AS id FROM queweek_show');

        // Redirect
        return redirect()->route('teacher.queWeek.show', ['id' => $data[0]->id]);
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
            'description' => 'View and check Question of the week on your teacher portal at Students Result Management System',
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Teacher data, Question, Week, Check, Show, View',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        // Redirect if id != set
        if (empty($id)) {
            return redirect()->route('teacher.queWeek');
        }
        // Get page data content from database
        $datas = DB::connection($school->school_database)
                        ->select('SELECT * FROM queweek_show WHERE id = ?', [$id]);
        
        // Return view with datas
        return view('teacher.queWeek.queWeek_show', [
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
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Edit and post Question of the week on your teacher portal at Students Result Management System',
            'keywords' => 'SMS, Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Question, Week, edit',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');
        $user = Auth::guard($model_name)->user();

        // Get page data content from database
        $school = session('schoolData');
        $class = $user->class_teacher;
        $user_id = $user->id;

        // Redirect if id != set
        if (empty($id)) {
            return redirect()->route('teacher.queWeek');
        }

        $form = DB::connection($school->school_database)
                        ->select('SELECT * FROM queweek_show WHERE id = ?', [$id]);

        $datas = DB::connection($school->school_database)
                        ->select('SELECT queweek_show.*, teachers.name, teachers.class_teacher FROM queweek_show, teachers 
                                WHERE (queweek_show.class = ? OR queweek_show.teacher_id = ?) 
                                AND queweek_show.teacher_id = teachers.id ORDER BY queweek_show.created_at DESC', [
                                    $user->class_teacher,
                                    $user->id
                                ]);

        // Return view with datas
        return view('teacher.queWeek.queWeek', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => $form[0],
            'data' => $datas,
            'message' => session('message') ?? ''
        ]);
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
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        // Get Data And Insert
        $subject = $request->input('subject');
        $class = $request->input('class');
        $question = $request->input('question');

        DB::connection($school->school_database)
                        ->update('UPDATE queweek_show SET subject = :subject, teacher_id =:teacher_id, class = :class, question = :question 
                            WHERE id =:id', [
                            'subject' => $subject,
                            'teacher_id' => $user->id,
                            'class' => $class,
                            'question' => $question,
                            'id' => $id
                        ]);
        
        // Redirect 
        return redirect()->route('teacher.queWeek')->with('message', 'Question Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        DB::connection($school->school_database)
                        ->delete('DELETE FROM queweek_show WHERE id = ?', [$id]);
        
        // Redirect 
        return redirect()->route('teacher.queWeek')->with('message', 'The Delete Request Is Successful!!!');
    }
}
