<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

class asesorController extends Controller
{
    public function index(){
        $pe = \Session::get('usuario');

        $asesores = $pe->docentes;
        dd($asesores);
        return view('coordinador.asignarProyecto.asesor')->with(['docentes'=>$asesores]);
    }
    

}
