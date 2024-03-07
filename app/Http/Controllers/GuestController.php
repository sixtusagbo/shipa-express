<?php

namespace App\Http\Controllers;

use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class GuestController extends Controller
{
    public function welcome()
    {
        return view('guest.welcome');
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function send_contact_mail()
    {
        $config = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Notification::route('mail', config('meta.admin.email'))
            ->notify(new ContactNotification($config));

        return back()->with('message', 'Your message has been sent successfully!');
    }
}
