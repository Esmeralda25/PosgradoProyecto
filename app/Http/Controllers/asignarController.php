<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyectos;

class asignarController extends Controller
{
    public function index(){
        $usuario  = \Session::get('usuario' );
        $proyectos = $usuario->proyectos;

        return view('coordinador.asignarProyecto.asignar',compact('proyectos'));
    }
}
