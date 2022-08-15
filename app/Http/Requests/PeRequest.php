<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeRequest extends FormRequest
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
            'password' => 'confirmed',
            'nombre' => 'required',
            'coordinador' => 'required',
            'correo'=>'required|email',
        ];
    }

    public function messages()
    {
        return             
        [
            'password.required' => 'El Password es requerido',
            'nombre.required' => 'El nombre del programa educativo es requerdido',
            'coordinador.required' => 'El nombre del coordinador del programa educativo es requerdido',
            'correo.required'=> 'El correo electronico del programa educativo es requerido',
            'password.confirmed' => 'El Password debe ser correctamente confirmado',
            'correo.email'=> 'El correo electronico del programa educativo no tiene la forma adecuada',
        ]
    ;
    }

}
