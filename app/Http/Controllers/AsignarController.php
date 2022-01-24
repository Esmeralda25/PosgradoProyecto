<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyectos;
use App\Models\Comite;

class AsignarController extends Controller
{
    public function index(){
        $usuario  = \Session::get('usuario' );
        $usuario = $usuario->fresh(); 
        $proyectos = $usuario->proyectos;
        return view('coordinador.asignarProyecto.asignar',compact('proyectos'));
    }
    
    
    
}
