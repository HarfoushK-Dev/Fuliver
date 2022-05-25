<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUs()
    {
        return view('contact-us');
    }

    public function sendEmail() {

        $attributes = request()->validate([
            'fullName' => ['required','max:255'],
            'emailAddress' => ['required', 'email' ,'max:255'],
            'phoneNumber' => [''],
            'subject' => [''],
            'message' => ['required']
        ]);

        Mail::to('khaledthetest@gmail.com')
            ->send(new ContactUs($attributes));

        return redirect('/contact-us')->with('flash_message', $attributes['fullName']);

    }

}
