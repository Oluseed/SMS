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
            'keywords' => 'Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Question, Week',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');
        $user = Auth::guard($model_name)->user();

        // Get page data content from database
        $school = session('schoolData');
        $data = DB::connection($school->school_database)
                        ->select('SELECT queweek_show.*, teachers.name, teachers.class_teacher FROM queweek_show, teachers 
                                WHERE (queweek_show.class = ? OR queweek_show.teacher_id = ?) 
                                AND queweek_show.teacher_id = teachers.id ORDER BY queweek_show.created_at DESC', [
                                    $user->class_teacher,
                                    $user->id
                                ]);//->SimplePaginate(2);
        $data2 = DB::connection($school->school_database)
                        ->table(['queweek_show', 'teachers'])
                        ->select('id', 'subject', 'teacher_id', 'class', 'question', 'teachers.name', 'teachers.class_teacher')
                        ->where(function($query, Closure $user) {
                            $query->where('queweek_show.class', $user->class_teacher)
                                  ->orWhere('queweek_show.teacher_id', $user->id);
                        })
                        ->where('queweek_show.teacher_id', 'teachers.id')
                        ->get();dd($data2);
        $datas = ($data != []) ? $data : '';

        if ($datas != []) {
            foreach ($datas as $row) {
                $row->question = Str::of($row->question)->words(20);
            }
        }

        // Return view with datas
        return view('teacher.queWeek', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => '',
            'data' => $datas
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
