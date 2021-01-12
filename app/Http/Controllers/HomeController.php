<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function submit()
    {
        return view('pages.submit');
    }

    public function contact_mail(Request $request)
    {
        $data = array('name' => $request->name, 'text' => $request->message, 'type' => 'Kontaktformulär');

        Mail::send('mail', $data, function($mail) use ($request) {
            $mail->to('info@atdev.me', 'Andreas')->subject
            ('Kontaktformulär');
            //$mail->from('info@atdev.me', 'Andreas');
            $mail->replyTo($request->email, $request->name);
        });

        echo "Basic Email Sent. Check your inbox.";
    }

    public function submit_post()
    {
        return view('pages.home');
    }
}
