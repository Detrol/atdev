<?php

namespace App\Http\Controllers;

use App\Models\Missions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        Mail::send('mail', $data, function ($mail) use ($request) {
            $mail->to('info@atdev.me', 'Andreas')->subject
            ('Kontaktformulär');
            //$mail->from('info@atdev.me', 'Andreas');
            $mail->replyTo($request->email, $request->name);
        });

        return redirect('/home')->with('status', 'Meddelandet är mottaget! Jag hör av mig så fort jag kan.');
    }

    public function submit_post(Request $request)
    {
        $mission = new Missions();
        $mission->full_name = $request->full_name;
        $mission->company_name = $request->company_name;
        $mission->company_number = $request->company_number;
        $mission->email = $request->email;
        $mission->page_name = $request->page_name;
        $mission->page_slogan = $request->page_slogan;
        $mission->pages = $request->pages;
        $mission->contact_check = $request->contact_check ?? 0;
        $mission->contact_phone = $request->contact_phone;
        $mission->contact_email = $request->contact_email;
        $mission->contact_address = $request->contact_address;
        $mission->contact_hours = $request->contact_hours;
        $mission->contact_form_check = $request->contact_form_check ?? 0;
        $mission->contact_form_mail = $request->contact_form_mail;
        $mission->languages_check = $request->languages_check ?? 0;
        $mission->languages = $request->page_languages;
        $mission->template = $request->template;
        $mission->template_other = $request->template_other;
        $mission->login_check = $request->login_check ?? 0;
        $mission->login_text = $request->login_text;
        $mission->package = $request->package;
        $mission->text_extra = $request->text_extra;
        $mission->accepted = $request->accepted ?? 0;
        $mission->unique_id = Str::lower(Str::random());
        $mission->save();

        $text = "Jag har nu mottagit er arbetsförfrågan.<br/>
Ni kommer snart att bli kontaktade för ytterligare information rörande arbetet.<br/><br/>

Nedan finner ni en länk där ni kan se status och information.<br/>
<a href='https://atdev.me/mission/'" . $mission->unique_id . ">https://atdev.me/mission/'" . $mission->unique_id . "</a><br/><br/>

Tack för er bokning!<br/>
Mvh Andreas";

        $data = array('name' => $request->full_name, 'text' => $text, 'type' => 'Arbetsbekräftelse');

        Mail::send('mail', $data, function ($mail) use ($request) {
            $mail->to($request->email, $request->full_name)->subject
            ('Arbetsbekräftelse');
            $mail->from('info@atdev.me', 'ATDev');
            //$mail->replyTo($request->email, $request->full_name);
        });

        return redirect('/mission/' . $mission->unique_id)->with('status', 'Er bokning är nu mottagen! Mer information kommer per E-Post.');
    }

    public function mission(Request $request)
    {
        $mission = Missions::where('unique_id', $request->id)->first();

        return view('pages.mission', compact('mission'));
    }
}
