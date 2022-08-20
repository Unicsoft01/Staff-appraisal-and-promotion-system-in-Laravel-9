<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $attendances = Attendance::all();
        return view('admin.att_rev', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.take_attendance');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'username' => 'required'
        ] );

        $user = $request->username;
        $userTime = date('h:i:s', strtotime("+1 hour"));
        $RegUsers = DB::select("SELECT username FROM users where username = '$user'");
        // $request must exist in db
        if ($RegUsers) {
            $attendance = new Attendance;
            // $appr = new Attendance;
            $attendance->staff_username = $user;
            // check for time and send approp value to db
            $EndTime = date('h:i:s',1660901400); // 9:30
            $startTime = date('h:i:s',1660894200); // 7:30
            // Early timing
            if ($userTime <= $startTime) {
                $attendance->remark ="early";
                $attendance->reward ="10";
            }
            // on timing
            else if ($userTime > $startTime && $userTime < $EndTime ) {
                $attendance->remark ="on time";
                $attendance->reward ="5";
            }
            else
            {
                $attendance->remark ="very late";
                $attendance->reward ="2";
            }
            // show notifications
            $notification = array(
                'message' => "Attendance Taken Successfully!",
                'alert-type' => "success"
            );

            if ($attendance->save()) {
               return redirect()->route('Attendances.index')->with($notification);
            }
            else
            {
                return "An error OCcured";
            }
        }
        else
        {
            $notification_ = array(
                'message' => "The username you entered does not exist in our database!",
                'alert-type' => "warning"
            );
               return back()->with($notification_);
        }


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
            // you can validate if need be
            // $request->validate([
            //     'username' => ['required', 'string', 'max:255'],
            // ]);

