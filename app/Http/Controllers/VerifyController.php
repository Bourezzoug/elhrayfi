<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verification_code($verification_code)
    {
        $user = User::where('code_verification', $verification_code)->first();
        if ($user) {
            $user->update(['verified' => 1]);
            return redirect('/')->with(['msg' => 'Votre email a été vérifié']);
        } 
        else{
            return redirect('/');
        }
    }
}
