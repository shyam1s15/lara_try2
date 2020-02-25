<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SmsTo;

class smsController extends Controller
{
    public function sendSmsToParent(){
        $message = 'Thankyou for using easyHostels.in please visit our website';

        // Array of mobile phone numbers (starting with the "+" sign and country code):
        $recipients = ['+919978222245', '+917434824541', '+917600173185'];
        
        // Send (broadcast) the $message to $recipients: 
        SmsTo::setMessage($message)
            ->setRecipients($recipients)
            ->sendMultiple();
    }
}
