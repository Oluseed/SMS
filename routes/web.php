<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SRMSController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AuthenticatedStudentSessionController;
use App\Http\Controllers\Auth\AuthenticatedTeacherSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!!
|
*/

Route::get('/', [SRMSController::class, 'index'])
                ->middleware('guest')
                ->name('home');

Route::get('/select_school', [SRMSController::class, 'show_school'])
                ->middleware('guest');

Route::post('/school_portal', [SRMSController::class, 'index_schoolHomepage'])
                ->middleware('guest');


Route::prefix('student')->group(function () {
    Route::get('/portal', [StudentController::class, 'index'])
                ->name('student.portal');
    
    Route::get('/announcements', [StudentController::class, 'show_announcements'])
                ->name('student.announcements');

    Route::get('/test_result', [StudentController::class, 'show_test_result'])
                ->name('student.test_result');

    Route::get('/exam_result', [StudentController::class, 'show_exam_result'])
                ->name('student.exam_result');

    Route::get('/lesson_files', [StudentController::class, 'show_lesson_files'])
                ->name('student.lesson_files');

    Route::get('/question&answer', [StudentController::class, 'show_q_a'])
                ->name('student.q&a');

    Route::get('/question_of_the_week', [StudentController::class, 'show_queWeek'])
                ->name('student.queWeek');

    Route::get('/timetable', [StudentController::class, 'show_timetable'])
            ->name('student.timetable');
});








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

