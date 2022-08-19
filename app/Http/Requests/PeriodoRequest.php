<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeriodoRequest extends FormRequest
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
            'nombre' => 'required',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date',
//            'estado'=> 'nullable|'
        ];
    }

    public function messages()
    {
        return             
        [
            'nombre.required' => 'El nombre del periodo es requerdido',
            'fechaInicio.required' => 'Es requerido especificar cuando inicia el periodo',
            'fechaFin.required' => 'Es requerido especificar cuando termina el periodo',
            'fechaInicio.date' => 'No parece ser la fecha cuando inicia el periodo',
            'fechaFin.date' => 'No parece ser la fecha cuando termina el periodo',
            'estado.nullable'=> 'nullable'
        ]
    ;
    }

}
