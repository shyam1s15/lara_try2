<?php

namespace App\Http\Controllers;
use App\Mail\MailToParent;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function sendMailToParent(){
        \Mail::to("devansh9189@gmail.com")->send(new MailToParent());
        \Mail::to("nishchalchotaii4@gmail.com")->send(new MailToParent());
    }
    public function sendMail($email){
        // $hashpass = \Hash::make($pass);
        
        $details = [
            'title' => 'please Sign Up using below below mail',
            'body' => 'Dear User please click below link to confirm your registation,
                        if you believe this is not done by you please ignore it thankyou
                        for your time and attention',
            'link'=> 'http://localhost:8000/checkMail?mail='. $email . '&pass=' . $hashpass ,
        ];
        
        return \Mail::to($email)->send(new \App\Mail\SendMailable($details));    
        // "<h1>Mail sent successfully to The parents</h1>";
    }
}
