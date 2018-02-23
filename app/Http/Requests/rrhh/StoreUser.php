<?php

namespace App\Http\Requests\rrhh;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'              => 'required|unique:users',
            'email'           => 'unique:users|email',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'id.required'       => '"ID" es requerido.',
            'id.unique'         => 'Ya existe otro usuario con este ID.',
            'email.email'       => '"Email" debe tener formato de email.',
            'email.unique'      => 'Ya existe otro usuario con este Email.',
        ];
    }
}
