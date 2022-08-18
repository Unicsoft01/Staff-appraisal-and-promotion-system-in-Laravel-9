<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    public function Profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view("admin.view_profile", compact('adminData'));
        // return view('admin.view_profile');
    }

    public function EditProfile()
    {
        // $id = Auth::user()->id;
        // $adminData = User::find($id);
        // return view("admin.view_profile", compact('adminData'));
        return view('admin.edit_profile');
    }

    public function SaveProfile(Request $requestDataFromForm)
    {
        $id = Auth::user()->id;
        $DataInDB = User::find($id);
        $DataInDB->name = $requestDataFromForm->name;
        $DataInDB->email = $requestDataFromForm->email;
        $DataInDB->username = $requestDataFromForm->username;

        if ($requestDataFromForm->file('profile_image'))
        {
            // hold uploaded file deatials\]
            $file = $requestDataFromForm->file('profile_image');
            $filename = date('YmdHi').$file->getclientOriginalName();
            // move file to public folder
            $file->move(public_path('upload'), $filename);
            // set database names to save
            $DataInDB['profile_image'] = 'upload/'.$filename;
        }

        $notification = array(
            'message' => "Profile Updated Successfully!",
            'alert-type' => "success"
        );
        if ($DataInDB->save()) {
           // return back();
           return redirect()->route('view_profile')->with($notification);
        }

    }

    // Mark attendance for all staffs
    // public function TakeAttendance()
    // {
    //     return view('admin.take_attendance');
    // }

    // public function ReviewAttendance()
    // {
    //     return view('admin.att_rev');
    // }

    // public function ListStaffs()
    // {
    //     return view('admin.staff_list');
    // }

    public function EvaluateStaff()
    {
        return view('admin.evaluate');
    }

    public function checkRespo()
    {
        return view('check_age_response_page');
    }

    public function Userreg()
    {
        return view('registeration');
    }

}
