<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComiteRequest extends FormRequest
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
            'asesor'  => 'required|different:revisor1|different:revisor2|different:revisor3',
            'revisor1'=> 'required|different:revisor2|different:revisor3',
            'revisor2'=> 'required|different:revisor3',
            'revisor3'=> 'required',
        ];
    }

    public function messages()
    {
        return             
        [
            'asesor.required' => 'Es requerdido espefificar el nombre del asesor',
            'revisor1.required' => 'Es requerdido espefificar el nombre del primer revisor',
            'revisor2.required' => 'Es requerdido espefificar el nombre del segundo revisor',
            'revisor3.required' => 'Es requerdido espefificar el nombre del tercer revisor',
            'different' => 'Todos los miembros del comite deben ser diferentes',
            'asesor.different'=> 'Todos los miembros del comite deben ser diferentes, revise al asesor',
            'revisor1.different'=> 'Todos los miembros del comite deben ser diferentes, revise al primer revisor',
            'revisor2.different'=> 'Todos los miembros del comite deben ser diferentes, revise al segundo revisor',

        ]
    ;
    }

    public function validate(){

    }


}
