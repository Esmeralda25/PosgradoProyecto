<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyectos;
use App\Models\Comite;

class asignarController extends Controller
{
    public function index(){
        $usuario  = \Session::get('usuario' );
        $proyectos = $usuario->proyectos;
        $comite = Comite::get();
        return view('coordinador.asignarProyecto.asignar',compact('proyectos','comite'));
    }
    
    
    
}
