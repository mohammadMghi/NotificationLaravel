<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Mail\MyEmail;
use App\Services\Notifications\Notification;

class NotificationController extends Controller
{
    //
    public function viewEmail(){
        return view('send-email');
    }
    public function viewSms(){
        return view('send-sms');
    }
    public function notificationView(){
        return view('welcome');
    }
    public function sendEmail(Request $request){
   
        $Notification = resolve(Notification::class);
        $Notification->sendEmail($request->input('email'),
                                    new MyEmail($request->input('title'),$request->input('message')));
    }
    
   
    
}
