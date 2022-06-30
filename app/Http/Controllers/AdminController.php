<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //admin index
    public function Index()
    {
        return view('admin.index');
    }

    // Mark attendance for all staffs
    public function TakeAttendance()
    {
        return view('admin.take_attendance');
    }

    public function ReviewAttendance()
    {
        return view('admin.att_rev');
    }

    public function ListStaffs()
    {
        return view('admin.staff_list');
    }
}
