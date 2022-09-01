<?php

namespace App\Http\Controllers;

class TableroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio(){
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) redirect(route('welcome'));
        if(is_array($usuario)){
            return  redirect(route('programas.index'));  
        }else{
            $usuario = $usuario->fresh();
            $clase = get_class($usuario);
            switch ($clase) {
                case 'App\Models\Estudiante':
                    return  redirect('/estudiantes');
                    break;
                case 'App\Models\Docente':
                    return  redirect('/docentes');
                    break;
               case 'App\Models\Pe':
                    return view('coordinador.index')->with('pe',$usuario);
                    break;
            }
        }
    }    
}

