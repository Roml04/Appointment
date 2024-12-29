<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;


class RegisterUserRequest extends FormRequest
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
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date|before:today',
            'usertype' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255'
        ];
    }

    public function prepareForValidation(): void
    {

        $middlename = $this->middlename !== null ? Str::title($this->middlename) : null;

        $this->merge([
            'firstname' => Str::title($this->firstname),
            'lastname' => Str::title($this->lastname),
            'middlename' => $middlename,
        ]);
        
    }

    // public function messages()
    // {
    //     return [
    //         'firstname.required' => 'A first name is required',
    //     ];
    // }
}
