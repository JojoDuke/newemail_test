<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Locale;

class MailController extends Controller
{
    public function sendEmail()
    {
        
        $user_id = Str::uuid();
        $email = 'sirduketylo@gmail.com';
        $iso_code = \Locale::getDisplayLanguage('en-Latn-IT-nedis', 'en');
        $status_code = http_response_code();

        $details = [
            'user_id' => $user_id,
            'title' => 'The Title',
            'body' => 'The body should be working',
            'email' => $email,
            'iso' => $iso_code,
            'status' => $status_code,
            'attachement' => null 
        ];
        Mail::to($email)->send(new TestMail($details));
        return "Email Sent";
    }
}
