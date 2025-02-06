<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactEmail;
use App\Mail\ContactForMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function submitForm(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required'
        ]);

        SendContactEmail::dispatch($validatedData);

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
