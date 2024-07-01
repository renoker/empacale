<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
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
            'name'      => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required',
            'phone'     => 'nullable|string|digits:10',
        ];
    }

    public function messages(){
        return [
            'name.required'     => 'El nombre es un campo requerido',
            'email.required'    => 'El email es un campo requerido',
            'email.email'       => 'Ingresa un correo electrónico válido',
            'email.unique'      => 'El email ingresado ya cuenta con un usuario asignado',
            'password'          => 'La contraseña es un campo requerido',
            'phone.required'    => 'El teléfono es un campo requerido',
            'phone.string'      => "Ingres un número de teléfono válido",
            'phone.digits'      => "El campo teléfono debe contener 10 dígitos",
        ];
    }
}
