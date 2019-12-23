<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBolsin extends FormRequest
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

    public function messages()
    {
        return [
            'dni.required' => 'Ingrese un DNI',
            'dni.unique' => 'Ya se encuentra registrado.',
            'dni.min' => 'Debe ingresar al menos 5 caracteres para el DNI.',
            'dni.numeric' => 'Debe ingresar solamente números para el DNI.',
            'apellido.required' => 'Ingrese un apellido',
            'apellido.min' => 'Debe ingresar al menos 3 caracteres para el Apellido.',
            'box.numeric' => 'Debe ingresar solamente números para el Box.',

        ];
    }


    public function rules()
    {
        return [
            'dni' => 'required|unique:bolsines|min:5|numeric',
            'apellido' => 'required|min:3',
            'box' => 'numeric',
        ];
    }
}
