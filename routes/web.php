<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

// all routes in admin controlller class
Route::controller(AdminController::class)->group(function (){
    Route::get('/dashboard', 'Index')->middleware(['auth'])->name('dashboard'); 
    Route::get('/logout', 'destroy')->middleware(['auth'])->name('logout'); 
    Route::get('/staffs/take_attendance', 'TakeAttendance')->middleware(['auth'])->name('take_attendance'); 
    Route::get('/staffs/attendance/review', 'ReviewAttendance')->middleware(['auth'])->name('att_rev'); 
    Route::get('/staffs/list', 'ListStaffs')->middleware(['auth'])->name('staff_list'); 
});


require __DIR__.'/auth.php';
