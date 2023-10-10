<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('pages.contact');
    }

    public function sendEmail(Request $request) {
        $data = [
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'subject' => $request->subject,
            'telephone' => $request->telephone,
            'body' => $request->body,
        ];
    
        Mail::to('med.developer00@gmail.com')->send(new ContactEmail($data));
    
        return back();
    }
}
