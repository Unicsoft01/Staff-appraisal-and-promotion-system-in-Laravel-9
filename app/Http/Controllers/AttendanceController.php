<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

class AttendanceController extends Controller
{
        // take attendance and save to db
        public function SaveAttendance(Request $request)
        {
            // you can validate if need be
            $request->validate([
                'username' => ['required', 'string', 'max:255'],
            ]);
        }
}

// make attempt to store all incomming data
// public function storeEmail(Request $request)
// {
//     // you can validate if need be
//     NewsletterModel::create(['email'=> $request->email]); // data taken from  form
//     $mail_controller = new EmailController;
//     $subscriber_message = EmailMessage::where('action','NEWSLETTER_SUBSCRIPTION_CUSTOMER')->first();

//     $admin_message = EmailMessage::where('action','NEWSLETTER_SUBSCRIPTION_ADMIN')->first();
//     if ($subscriber_message) {
//         $mail_controller->sendMail($subscriber_message->title,$subscriber_message->subject,$subscriber_message->body,$request->email);
//     }
//     if ($admin_message) {
//         // get a single admin with a where clause
//         $admins = User::where('email', 'yakubmuhammed51@gmail.com')->get();
//         foreach ($admins as $admin) {
//         $mail_controller->sendMail($admin_message->title,$admin_message->subject,$admin_message->body,$admin->email,'','Admin');
//         }
//     }
//     return back(); 
// }