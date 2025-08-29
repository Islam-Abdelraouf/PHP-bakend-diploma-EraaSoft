<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Email;
use Illuminate\Validation\Rules\ImageFile;
use Illuminate\Validation\Validator;

class CreateDoctorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule', 'array<mixed>', 'string>
     */
    public function rules(): array
    {
        // dd(request()->all());
        return [
            'name' => ['bail', 'required', 'string', 'min:4', 'max:255'],
            'email' => ['bail', 'required', 'email', 'unique:doctors,email'],
            'phone' => ['bail', 'required', 'string', 'max:20', 'unique:doctors,phone'],
            'address' => ['nullable', 'string', 'max:500'],
            'image' => ['nullable', 'image', 'max:2048'],
            'major_id' => ['bail', 'required', 'integer', 'exists:majors,id'],
        ];
    }
}
