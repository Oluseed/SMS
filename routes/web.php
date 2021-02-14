<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SRMSController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\TestController;
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
                ->middleware('guest')
                ->name('select.school');

Route::post('/select_school', [SRMSController::class, 'create_school'])
                ->middleware('guest');

Route::get('/school_portal', [SRMSController::class, 'index_schoolHomepage'])
                ->middleware('guest')
                ->name('school.portal');

Route::group(['prefix' => 'student', 'middleware' => 'StudentRole'], function () {
    Route::get('/portal', [StudentController::class, 'index'])
                ->name('student.portal');
    
    Route::get('/announcements', [StudentController::class, 'show_announcements'])
                ->name('student.announcements');

    Route::get('/test_result', [StudentController::class, 'show_test_result'])
                ->name('student.test_result');

    Route::get('/exam_result', [StudentController::class, 'show_exam_result'])
                ->name('student.exam_result');

    Route::get('/question_of_the_week', [StudentController::class, 'show_queWeek'])
                ->name('student.queWeek');

    Route::post('/question_of_the_week', [StudentController::class, 'store_queWeek']);

    Route::get('/lesson_files', [StudentController::class, 'show_lesson_files'])
                ->name('student.lesson_files');

    Route::get('/messages', [StudentController::class, 'show_message'])
                ->name('student.message');

    Route::post('/messages', [StudentController::class, 'store_message']);

    Route::get('/timetable', [StudentController::class, 'show_timetable'])
            ->name('student.timetable');
});

Route::group(['prefix' => 'teacher', 'middleware' => 'TeacherRole'], function () {
    Route::get('/portal', [TeacherController::class, 'index'])
                ->name('teacher.portal');

    Route::prefix('announcements')->group(function () {
        Route::get('/', [AnnouncementController::class, 'index'])
                    ->name('teacher.announcement');

        Route::post('/', [AnnouncementController::class, 'store'])
                    ->name('teacher.announcement');

        Route::get('/{id}/edit', [AnnouncementController::class, 'edit']);

        Route::put('/{id}', [AnnouncementController::class, 'update']);

        Route::delete('/{id}/delete', [AnnouncementController::class, 'delete']);
    });

    Route::prefix('timetable')->group(function () {
        Route::get('/', [TimetableController::class, 'index'])
                    ->name('teacher.timetable');

        Route::post('/', [TimetableController::class, 'store'])
                    ->name('teacher.timetable');

        Route::get('/{id}/edit', [TimetableController::class, 'edit']);

        Route::put('/{id}/{class}', [TimetableController::class, 'update'])
                    ->name('teacher.timetable.update');

        Route::delete('/{class}/delete', [TimetableController::class, 'destroy']);
    });

    Route::prefix('test_result')->group(function () {
        Route::get('/', [TestController::class, 'index'])
                    ->name('teacher.test_result');

        Route::post('/', [TestController::class, 'store'])
                    ->name('teacher.test_result');

        Route::get('/{id}/edit', [TestController::class, 'edit']);

        Route::put('/{id}/{class}', [TestController::class, 'update'])
                    ->name('teacher.test_result.update');

        Route::delete('/{class}/delete', [TestController::class, 'destroy']);
    });
});

// Route::fallback(function (){
//     return redirect()->back();
// });







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

