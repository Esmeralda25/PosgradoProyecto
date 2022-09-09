<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoResquest extends FormRequest
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
        return     
        [
            'estudiante_id' => 'required',
            'titulo' => 'required',
            'hipotesis' => 'required',
            'objetivo' => 'required',
            'objetivos_especificos' => 'required',
        ];
    }

    public function messages()
    {
        return             
        [
            'estudiante_id.required' => 'Este proyecto debe asignarse a un estudiante.',
            'titulo.required' => 'El titulo del proyecto es requerdido',
            'hipotesis.required' => 'La hipotesis del proyecto es requerdida',
            'objetivo.required' => 'Es necesario definir el objetivo del proyecto',
            'objetivos_especificos.required' => 'Los objetivos específicos del proyecto son necesarios',
        ]
    ;
    }
}
