<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\Email;


class RegisterRequest extends FormRequest
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
    public function rules()
    {
        $arr = [
            'name' => ['required', 'string', 'min:4', 'max:20'],
            'email' => ['required', Email::defaults(), 'email', 'unique:users,email'],
            'phone' => ['required', 'string', 'min:10', 'max:15'],
            'image' => ['image', 'max:2048'],
            'password' => ['required', 'string', Password::defaults(), 'confirmed'],
        ];
        return $arr;
    }
}
