<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditInfoRequest extends FormRequest
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
            'firstname'  => ['nullable', 'string', 'max:255'],
            'middlename' => ['nullable', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'contact' => ['nullable', 'max:255'],
            'birthdate' => ['nullable', 'date', 'before:today'],
            'email' => ['nullable', 'email'],
            'password' => ['nullable', 'string','min:8', 'max:255']
            // 'firstname'  => ['required', 'string', 'max:255'],
            // 'middlename' => ['nullable', 'string', 'max:255'],
            // 'lastname' => ['required', 'string', 'max:255'],
            // 'contact' => ['nullable', 'max:255'],
            // 'birthdate' => ['required', 'date', 'before:today'],
            // 'email' => ['required', 'email'],
            // 'password' => ['required', 'string','min:8', 'max:255']
        ];
    }
}
