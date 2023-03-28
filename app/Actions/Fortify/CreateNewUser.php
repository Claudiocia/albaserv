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
            'cpf' => ['required', 'cpf', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cadastro' => ['required', 'unique:users'],
            'celular' => ['required', 'string', 'unique:users'],
            'ramal' => ['required', 'string'],
            'lotacao' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'cpf' => $input['cpf'],
            'email' => $input['email'],
            'cadastro' => $input['cadastro'],
            'celular' => $input['celular'],
            'lotacao' => $input['lotacao'],
            'ramal' => $input['ramal'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
