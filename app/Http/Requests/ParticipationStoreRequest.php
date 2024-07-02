<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipationStoreRequest extends FormRequest
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
            'codigo_lote'   => 'required|size:17|regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*:)[a-zA-Z\d:]+$/',
        ];
    }

    public function messages()
    {
        return [
            'codigo_lote'           => 'Es necesario que ingreses un código lote',
            'codigo_lote.size'      => 'El tamaño del código lote no es correcto.',
            'codigo_lote.regex'     => 'El código lote conformado por 17 caracteres, entre números y letras. Debes colocarlo sin espacios y con los dos puntos (:) que aparecen en medio del lote',
        ];
    }
}
