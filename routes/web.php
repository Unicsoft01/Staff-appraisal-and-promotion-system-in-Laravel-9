<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewletterController;
use App\Http\Controllers\AttendanceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
    // return view('login');
});

// all routes in admin controlller class
Route::controller(AdminController::class)->group(function (){
    Route::get('/dashboard', 'Index')->middleware(['auth'])->name('dashboard'); 
    Route::get('/logout', 'destroy')->middleware(['auth'])->name('logout'); 
    Route::get('/admin_profile', 'Profile')->middleware(['auth'])->name('view_profile'); 
    Route::get('/edit_admin_profile', 'EditProfile')->middleware(['auth'])->name('edit_profile'); 
    Route::get('/staffs/take_attendance', 'TakeAttendance')->middleware(['auth'])->name('take_attendance'); 
    Route::get('/staffs/attendance/review', 'ReviewAttendance')->middleware(['auth'])->name('att_rev'); 
    Route::get('/staffs/list', 'ListStaffs')->middleware(['auth'])->name('staff_list'); 
    Route::get('/check_age_response_page', 'checkRespo')->name('check_respo'); 
    // Route::get('/staffs/evaluate', 'EvaluateStaff')->middleware(['auth'])->name('evaluate'); 
    Route::get('/staffs/evaluate', 'EvaluateStaff')->name('evaluate');//->middleware('check_age') 
    Route::get('registeration', 'Userreg')->name('registeration');

});

// all routes in admin controlller class
Route::controller(NewletterController::class)->group(function (){
    Route::get('/newsletter/subscribe', 'newsletterForm')->middleware(['auth'])->name('news_letter'); 
    Route::post('/newsletter/subscribe', 'StoreEmail')->middleware(['auth'])->name('news_letter'); 
});

// all routes in  AttendanceControlller class
Route::controller(AttendanceController::class)->group(function (){
    Route::post('/save/take_attendance', 'SaveAttendance')->name('save.attend'); 
});


require __DIR__.'/auth.php';
