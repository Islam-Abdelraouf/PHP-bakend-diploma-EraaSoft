<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Email;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
        return

                [
                    'email' => ['required', 'email', 'string', Email::defaults()],
                    'password' => ['required', 'string', 'min:8', 'max:255', Password::defaults()]
                ]
            ;
    }
}



                // [
                //     'email.required' => 'Wrong Credentials!',
                //     'email.email' => 'Wrong Credentials!',
                //     'email.string' => 'Wrong Credentials!',
                //     'password.required' => 'Wrong Credentials!',
                //     'password.string' => 'Wrong Credentials!',
                //     'password.min' => 'Wrong Credentials!',
                //     'password.max' => 'Wrong Credentials!',
                // ]
