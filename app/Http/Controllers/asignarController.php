<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyectos;
use App\Models\Comite;

class asignarController extends Controller
{
    public function index(){
        $usuario  = \Session::get('usuario' );
        $usuario = $usuario->fresh(); 
        $proyectos = $usuario->proyectos;
        $comite = Comite::get();//no tiene caso tomar el comite aqui, para que lo haces, que regresa? no tiene caso que lo pases a la vista.
        return view('coordinador.asignarProyecto.asignar',compact('proyectos'));
    }
    
    
    
}
