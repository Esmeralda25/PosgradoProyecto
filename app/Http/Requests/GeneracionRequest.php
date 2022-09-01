<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneracionRequest extends FormRequest
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
        return             [
            'pe_id' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
        ];
    }

    public function messages()
    {
        return             
        [
            'pe_id.required' => 'Es requerido especificar a que programa educativo se asignará',
            'nombre.required' => 'El nombre de la generacion es requerdido',
            'descripcion.required' => 'La descripcion de la generacion es requerdido',
        ]
    ;
    }
}
