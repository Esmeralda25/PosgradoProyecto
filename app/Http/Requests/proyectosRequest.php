<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class proyectosRequest extends FormRequest
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
            'Titulo'->'required|unique:proyectos,Titulo'
            'Hipotesis'->'required'
            'Objetivos'->'required'
            'Reporte'->'required'
            'ProyectosCol'->'required'
            'comite'->'required'
            'avance'->'required'
            'estudiantes_id'->'required'
        ];
    }
}
