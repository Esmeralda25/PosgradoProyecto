<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriterioRequest extends FormRequest
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
            'descripcion' => 'required',
            'rubrica_id'=> 'required',
        ];
    }

    public function messages()
    {
        return             
        [
            'descripcion.required' => 'Es requerdido espefificar el nombre del criterio',
            'rubrica_id.required'=> 'Es requerido especificar a que rubrica pertenece este criterio.',
        ]
    ;
    }

}
