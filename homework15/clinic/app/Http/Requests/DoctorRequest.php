<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Email;
use Illuminate\Validation\Rules\ImageFile;

class DoctorRequest extends FormRequest
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
        // dd(request()->all());
        return [
            'name' => ['required', 'string', 'min:4', 'max:50'],
            'email' => ['required', 'email', 'max:30'],
            'phone' => ['required', 'string', 'min:11', 'max:15'],
            'address' => ['required', 'string', 'min:10', 'max:255'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png,gif.webb', 'max:2048'],
            'major_id' => ['required'],
        ];
    }
}
