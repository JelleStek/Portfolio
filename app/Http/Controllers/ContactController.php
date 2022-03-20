<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact() {
        return view('/contact');
    }

    public function sendEmail(Request $request) {

        $details = [
            'name'      => $request->name,
            'subject'   => $request->subject,
            'email'     => $request->email,
            'tel'       => $request->tel,
            'message'   => $request->message

        ];

        Mail::to('forward@nwave.nl')->send(new ContactMail($details));
        return redirect()->back();
    }
}
