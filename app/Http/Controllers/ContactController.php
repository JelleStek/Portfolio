<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct() {

    }

    /**
     * Validate contact form input
     *
     * @param $input
     */
    private function validateContactEmail($input) {
        //Checking by validation rules
        $validated = $input->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'message' => 'required',
        ]);
    }

    /**
     * Contact form send function
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sendMail(Request $request) {
        // Checking the input by validator rules
        $validatedInput = $this->validateContactEmail($request);

        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'tel' => $request->tel,
            'message' => $request->message,
            'test' => "Testing"
        ];

        Mail::to('forward@nwave.nl')->send(new ContactMail($data));

        // Redirect after sending the email.
        return redirect(route('contact'));

    }
}