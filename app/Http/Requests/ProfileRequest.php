<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        return [
            'fname' => 'required|string|between:3,20',
            'lname' => 'required|string|max:60',
            'email' => 'required|email|unique:profiles,email|max:80',
            'password' => [
                'required',
                'confirmed',
                'between:8,60',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'bio' => 'required|string|max:2000',
            'image' => 'mimes:jpg,jpeg,png,svg,webp|max:2024',
        ];
    }
}
