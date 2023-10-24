<?php

namespace App\Actions\Fortify;

use App\Mail\EmailVerify;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'age' => ['nullable', 'integer'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        $otp = strval(random_int(100000, 999999));

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'user_type' =>  $input['role_id'],
            'code_verification' =>  $otp
        ]);
        // session()->put('otp', $otp);
        // session(['user_type' => $input['role_id']]);
        Mail::to($input['email'])->send(new EmailVerify($input['email'],'Elhrayfi - Confirmez votre compte',$otp));
        return $user;
    }
}
