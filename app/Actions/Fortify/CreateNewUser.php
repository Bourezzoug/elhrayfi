<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            // 'age' =>  $input['age'] ?? null,
            'password' => Hash::make($input['password']),
            'user_type' =>  $input['role_id'],
            // 'addresse' =>  $input['address'] ?? null,
            // 'ville' =>  $input['ville'] ?? null,
            // 'client_type'  =>  $input['client_type'] ?? null,
        ]);
        // if (!empty($input['profile_photo_path'])) {
        //     $url = $input['profile_photo_path']->store('images','public');
        //     $user['profile_photo_path'] = '/storage/' . $url;
        // }
        session(['user_type' => $input['role_id']]);
        return $user;
    }
}
