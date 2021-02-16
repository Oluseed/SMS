<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TimetableController extends Controller
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
            'description' => 'Post and check timetables on your teacher portal at Students Result Management System',
            'keywords' => 'Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Timetables',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');
        $user = Auth::guard($model_name)->user();

        // Get page data content from database
        $school = session('schoolData');
        $jss1 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "jss 1" ORDER BY id ASC');

        $jss2 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "jss 2" ORDER BY id ASC');

        $jss3 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "jss 3" ORDER BY id ASC');

        $sss1 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "sss 1" ORDER BY id ASC');

        $sss2 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "sss 2" ORDER BY id ASC');

        $sss3 = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = "sss 3" ORDER BY id ASC');

        if ($jss1 != []) {
            $jss1s = $jss1;
            if ($user->class_teacher == 'jss 1') {
                $show = 'true';
            }
        } else {
            $jss1s = '';
        }
        if ($jss2 != []) {
            $jss2s = $jss2;
            if ($user->class_teacher == 'jss 2') {
                $show = 'true';
            }
        } else {
            $jss2s = '';
        }
        if ($jss3 != []) {
            $jss3s = $jss3;
            if ($user->class_teacher == 'jss 3') {
                $show = 'true';
            }
        } else {
            $jss3s = '';
        }
        if ($sss1 != []) {
            $sss1s = $sss1;
            if ($user->class_teacher == 'sss 1') {
                $show = 'true';
            }
        } else {
            $sss1s = '';
        }
        if ($sss2 != []) {
            $sss2s = $sss2;
            if ($user->class_teacher == 'sss 2') {
                $show = 'true';
            }
        } else {
            $sss2s = '';
        }
        if ($sss3 != []) {
            $sss3s = $sss3;
            if ($user->class_teacher == 'sss 3') {
                $show = 'true';
            }
        } else {
            $sss3s = '';
        }
        if (isset($show)) {
            $show = 'true';
        } else {
            $show = 'false';
        }
        // Return view with datas
        return view('teacher.timetable', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => '',
            'jss1' => $jss1s,
            'jss2' => $jss2s,
            'jss3' => $jss3s,
            'sss1' => $sss1s,
            'sss2' => $sss2s,
            'sss3' => $sss3s,
            'show'=> $show
        ]);
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
        $recipient = $user->class_teacher;
        $period1 = $request->input('period1');
        $period2 = $request->input('period2');
        $period3 = $request->input('period3');
        $period4 = $request->input('period4');
        $period5 = $request->input('period5');
        $period6 = $request->input('period6');
        $period7 = $request->input('period7');
        $period8 = $request->input('period8');
        $period9 = $request->input('period9');
        $period10 = $request->input('period10');

        $mon1 = $request->input('mon1');
        $mon2 = $request->input('mon2');
        $mon3 = $request->input('mon3');
        $mon4 = $request->input('mon4');
        $mon5 = $request->input('mon5');
        $mon6 = $request->input('mon6');
        $mon7 = $request->input('mon7');
        $mon8 = $request->input('mon8');
        $mon9 = $request->input('mon9');
        $mon10 = $request->input('mon10');

        $tue1 = $request->input('tue1');
        $tue2 = $request->input('tue2');
        $tue3 = $request->input('tue3');
        $tue4 = $request->input('tue4');
        $tue5 = $request->input('tue5');
        $tue6 = $request->input('tue6');
        $tue7 = $request->input('tue7');
        $tue8 = $request->input('tue8');
        $tue9 = $request->input('tue9');
        $tue10 = $request->input('tue10');

        $wed1 = $request->input('wed1');
        $wed2 = $request->input('wed2');
        $wed3 = $request->input('wed3');
        $wed4 = $request->input('wed4');
        $wed5 = $request->input('wed5');
        $wed6 = $request->input('wed6');
        $wed7 = $request->input('wed7');
        $wed8 = $request->input('wed8');
        $wed9 = $request->input('wed9');
        $wed10 = $request->input('wed10');

        $thu1 = $request->input('thu1');
        $thu2 = $request->input('thu2');
        $thu3 = $request->input('thu3');
        $thu4 = $request->input('thu4');
        $thu5 = $request->input('thu5');
        $thu6 = $request->input('thu6');
        $thu7 = $request->input('thu7');
        $thu8 = $request->input('thu8');
        $thu9 = $request->input('thu9');
        $thu10 = $request->input('thu10');

        $fri1 = $request->input('fri1');
        $fri2 = $request->input('fri2');
        $fri3 = $request->input('fri3');
        $fri4 = $request->input('fri4');
        $fri5 = $request->input('fri5');
        $fri6 = $request->input('fri6');
        $fri7 = $request->input('fri7');
        $fri8 = $request->input('fri8');
        $fri9 = $request->input('fri9');
        $fri10 = $request->input('fri10');
        
        // DB::transaction(function () {
            DB::connection($school->school_database)
                ->insert(
                    'INSERT INTO timetables (class, day, col1,  col2, col3, col4, col5, col6, col7, col8, col9, col10)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                     [$recipient, 'Day', $period1, $period2, $period3, $period4, $period5, $period6, $period7, $period8, $period9, $period10]);
            DB::connection($school->school_database)
                ->insert(
                    'INSERT INTO timetables (class, day, col1,  col2, col3, col4, col5, col6, col7, col8, col9, col10)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                     [$recipient, 'mon', $mon1, $mon2, $mon3, $mon4, $mon5, $mon6, $mon7, $mon8, $mon9, $mon10]);
            DB::connection($school->school_database)
                ->insert(
                    'INSERT INTO timetables (class, day, col1,  col2, col3, col4, col5, col6, col7, col8, col9, col10)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                     [$recipient, 'Tue', $tue1, $tue2, $tue3, $tue4, $tue5, $tue6, $tue7, $tue8, $tue9, $tue10]);
            DB::connection($school->school_database)
                ->insert(
                    'INSERT INTO timetables (class, day, col1,  col2, col3, col4, col5, col6, col7, col8, col9, col10)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                     [$recipient, 'Wed', $wed1, $wed2, $wed3, $wed4, $wed5, $wed6, $wed7, $wed8, $wed9, $wed10]);
            DB::connection($school->school_database)
                ->insert(
                    'INSERT INTO timetables (class, day, col1,  col2, col3, col4, col5, col6, col7, col8, col9, col10)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                     [$recipient, 'Thur', $thu1, $thu2, $thu3, $thu4, $thu5, $thu6, $thu7, $thu8, $thu9, $thu10]);
            DB::connection($school->school_database)
                ->insert(
                    'INSERT INTO timetables (class, day, col1,  col2, col3, col4, col5, col6, col7, col8, col9, col10)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                     [$recipient, 'Fri', $fri1, $fri2, $fri3, $fri4, $fri5, $fri6, $fri7, $fri8, $fri9, $fri10]);
     
        // });
        // Redirect
        return redirect(route('teacher.timetable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $metadata = [
            'title' => '| TEACHER PORTAL',
            'description' => 'Edit timetable on your teacher portal at Students Result Management System',
            'keywords' => 'Teacher, Result checker, Teacher portal, Teacher data, Teacher activities, Timetables',
            'body_pics' => 'body2'
        ];
        // Get model_name
        $model_name = session('model_name');
        
        //Get form value content
        $school = session('schoolData');
        $class = DB::connection($school->school_database)
                        ->select('SELECT class FROM timetables WHERE id = ?', [$id]);
        if ($class == null) {
            return redirect()->back();
        }
        $form = DB::connection($school->school_database)
                        ->select('SELECT * FROM timetables WHERE class = ?', [$class[0]->class]);
        
        // Return view with datas
        return view('teacher.timetable_edit', [
            'metadata' => $metadata,
            'school' => session('schoolData'),
            'user' => Auth::guard($model_name)->user(),
            'form' => $form
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $class)
    {
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        // Get Data And Insert
        $recipient = $user->class_teacher;
        $period1 = $request->input('period1');
        $period2 = $request->input('period2');
        $period3 = $request->input('period3');
        $period4 = $request->input('period4');
        $period5 = $request->input('period5');
        $period6 = $request->input('period6');
        $period7 = $request->input('period7');
        $period8 = $request->input('period8');
        $period9 = $request->input('period9');
        $period10 = $request->input('period10');

        $mon1 = $request->input('mon1');
        $mon2 = $request->input('mon2');
        $mon3 = $request->input('mon3');
        $mon4 = $request->input('mon4');
        $mon5 = $request->input('mon5');
        $mon6 = $request->input('mon6');
        $mon7 = $request->input('mon7');
        $mon8 = $request->input('mon8');
        $mon9 = $request->input('mon9');
        $mon10 = $request->input('mon10');

        $tue1 = $request->input('tue1');
        $tue2 = $request->input('tue2');
        $tue3 = $request->input('tue3');
        $tue4 = $request->input('tue4');
        $tue5 = $request->input('tue5');
        $tue6 = $request->input('tue6');
        $tue7 = $request->input('tue7');
        $tue8 = $request->input('tue8');
        $tue9 = $request->input('tue9');
        $tue10 = $request->input('tue10');

        $wed1 = $request->input('wed1');
        $wed2 = $request->input('wed2');
        $wed3 = $request->input('wed3');
        $wed4 = $request->input('wed4');
        $wed5 = $request->input('wed5');
        $wed6 = $request->input('wed6');
        $wed7 = $request->input('wed7');
        $wed8 = $request->input('wed8');
        $wed9 = $request->input('wed9');
        $wed10 = $request->input('wed10');

        $thu1 = $request->input('thu1');
        $thu2 = $request->input('thu2');
        $thu3 = $request->input('thu3');
        $thu4 = $request->input('thu4');
        $thu5 = $request->input('thu5');
        $thu6 = $request->input('thu6');
        $thu7 = $request->input('thu7');
        $thu8 = $request->input('thu8');
        $thu9 = $request->input('thu9');
        $thu10 = $request->input('thu10');

        $fri1 = $request->input('fri1');
        $fri2 = $request->input('fri2');
        $fri3 = $request->input('fri3');
        $fri4 = $request->input('fri4');
        $fri5 = $request->input('fri5');
        $fri6 = $request->input('fri6');
        $fri7 = $request->input('fri7');
        $fri8 = $request->input('fri8');
        $fri9 = $request->input('fri9');
        $fri10 = $request->input('fri10');
        
        // DB::transaction(function () {      
            DB::connection($school->school_database)
                ->update('UPDATE timetables SET class = :class, day = :day, col1 = :col1, col2 = :col2, col3 = :col3, col4 = :col4, col5 = :col5, col6 = :col6, col7 = :col7, col8 = :col8, col9 = :col9, col10 = :col10 WHERE id =:id', [
                    'class' => $recipient, 'day' => 'Day', 'col1' => $period1, 'col2' => $period2, 'col3' => $period3, 'col4' => $period4, 'col5' => $period5, 'col6' => $period6, 'col7' => $period7, 'col8' => $period8, 'col9' => $period9, 'col10' => $period10, 'id' => $id]);
        
            DB::connection($school->school_database)
                ->update('UPDATE timetables SET class = :class, day = :day, col1 = :col1, col2 = :col2, col3 = :col3, col4 = :col4, col5 = :col5, col6 = :col6, col7 = :col7, col8 = :col8, col9 = :col9, col10 = :col10 WHERE id =:id', [
                    'class' => $recipient, 'day' => 'mon', 'col1' => $mon1, 'col2' => $mon2, 'col3' => $mon3, 'col4' => $mon4, 'col5' => $mon5, 'col6' => $mon6, 'col7' => $mon7, 'col8' => $mon8, 'col9' => $mon9, 'col10' => $mon10, 'id' => $id+1]);
                    
            DB::connection($school->school_database)
                ->update('UPDATE timetables SET class = :class, day = :day, col1 = :col1, col2 = :col2, col3 = :col3, col4 = :col4, col5 = :col5, col6 = :col6, col7 = :col7, col8 = :col8, col9 = :col9, col10 = :col10 WHERE id =:id', [
                    'class' => $recipient, 'day' => 'tue', 'col1' => $tue1, 'col2' => $tue2, 'col3' => $tue3, 'col4' => $tue4, 'col5' => $tue5, 'col6' => $tue6, 'col7' => $tue7, 'col8' => $tue8, 'col9' => $tue9, 'col10' => $tue10, 'id' => $id+2]);
            
            DB::connection($school->school_database)
                ->update('UPDATE timetables SET class = :class, day = :day, col1 = :col1, col2 = :col2, col3 = :col3, col4 = :col4, col5 = :col5, col6 = :col6, col7 = :col7, col8 = :col8, col9 = :col9, col10 = :col10 WHERE id =:id', [
                    'class' => $recipient, 'day' => 'wed', 'col1' => $wed1, 'col2' => $wed2, 'col3' => $wed3, 'col4' => $wed4, 'col5' => $wed5, 'col6' => $wed6, 'col7' => $wed7, 'col8' => $wed8, 'col9' => $wed9, 'col10' => $wed10, 'id' => $id+3]);
                
            DB::connection($school->school_database)
                ->update('UPDATE timetables SET class = :class, day = :day, col1 = :col1, col2 = :col2, col3 = :col3, col4 = :col4, col5 = :col5, col6 = :col6, col7 = :col7, col8 = :col8, col9 = :col9, col10 = :col10 WHERE id =:id', [
                    'class' => $recipient, 'day' => 'thur', 'col1' => $thu1, 'col2' => $thu2, 'col3' => $thu3, 'col4' => $thu4, 'col5' => $thu5, 'col6' => $thu6, 'col7' => $thu7, 'col8' => $thu8, 'col9' => $thu9, 'col10' => $thu10, 'id' => $id+4]);
                
            DB::connection($school->school_database)
                ->update('UPDATE timetables SET class = :class, day = :day, col1 = :col1, col2 = :col2, col3 = :col3, col4 = :col4, col5 = :col5, col6 = :col6, col7 = :col7, col8 = :col8, col9 = :col9, col10 = :col10 WHERE id =:id', [
                    'class' => $recipient, 'day' => 'fri', 'col1' => $fri1, 'col2' => $fri2, 'col3' => $fri3, 'col4' => $fri4, 'col5' => $fri5, 'col6' => $fri6, 'col7' => $fri7, 'col8' => $fri8, 'col9' => $fri9, 'col10' => $fri10, 'id' => $id+5]);     
        // });
        // Redirect
        return redirect()->route('teacher.timetable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $class)
    {
        // Get model_name
        $model_name = session('model_name');

        // Get page data content from database
        $school = session('schoolData');
        $user = Auth::guard($model_name)->user();
        
        DB::connection($school->school_database)
                        ->delete('DELETE FROM timetables WHERE class = ?', [$class]);
        
        // Redirect 
        return redirect()->route('teacher.timetable');
    }
}
