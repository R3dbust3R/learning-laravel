<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'author_id' => 'required|int',
            'title'     => 'required|string|min:5|max:1000',
            'content'   => 'required|string|min:300|max:20000',
            'thumbnail' => 'mimes:jpg,jpeg,png,svg,webp|max:4096',
        ];
    }
}
