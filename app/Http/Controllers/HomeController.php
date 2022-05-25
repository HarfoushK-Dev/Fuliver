<?php

namespace App\Http\Controllers;

use App\Mail\KnowMore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function sendEmail() {
        $attributes = request()->validate([
            'form_topic' => ['required','max:255'],
            'form_email' => ['required', 'email' ,'max:255']
        ]);

        Mail::to('khaledthetest@gmail.com')
            ->send(new KnowMore($attributes));

        return redirect('/')->with('flash_message', $attributes['form_email']);
    }
}
