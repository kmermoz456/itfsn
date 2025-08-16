<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // honeypot simple
        if ($request->filled('website')) {
            return back()->with('ok', 'Message envoyé.')->withInput();
        }

        $data = $request->validate([
            'prenom'  => ['required','string','max:100'],
            'nom'     => ['required','string','max:100'],
            'email'   => ['required','email','max:190'],
            'phone'   => ['nullable','string','max:50'],
            'subject' => ['required','string','max:190'],
            'interet' => ['nullable','string','max:190'],
            'message' => ['required','string','max:5000'],
        ]);

        Mail::to(config('mail.from.address', 'kmermoz456@gmail.com.com'))
            ->send(new ContactMessage($data));

        return redirect()->route('contact')->with('ok', 'Merci ! Votre message a bien été envoyé.');
    }
}
