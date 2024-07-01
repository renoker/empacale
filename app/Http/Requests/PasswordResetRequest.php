<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordResetRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email'
        ];
    }

    public function messages(){
        return [
            'email.required'    => "Es necesario que ingreses tu correo electrónico.",
            'email.email'       => "Es necesario que ingreses un email válido",
            'email.exists'      => "El correo electrónico ingresado no se encuentra asociado a ningún usuario",
        ];
    }
}
