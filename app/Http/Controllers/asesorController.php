<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class asesorController extends Controller
{
    public function index(){
        $asesores = \DB::table('docentes')
        ->orderBy('id','DESC')
        ->get();
       
        return view('coordinador.asignarProyecto.asesor')->with(['docentes'=>$asesores]);
    }

    public function seleccionados(){
        $docentes=DB::table('docentes')
        ->join('pes','docentes.id','=','pes.is')
        ->select('docentes.nombre','pes.nombre')
        ->get();
    }
}
