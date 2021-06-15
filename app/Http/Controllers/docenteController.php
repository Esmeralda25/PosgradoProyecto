<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\docente;
use App\Models\estudiante;
use App\Models\proyecto;

class docenteController extends Controller
{ 
    public function index()
    {
        $docentes = docente::all();
        $docentes = \Session::get('nombre');
        $estudiantes = \Session::get('nombre');
        $proyecto = \Session::get('id');

        $estudiantes = \DB::table('estudiantes')
        ->select('estudiantes.*')
        ->orderBy('id','DESC')
        ->get();

        $proyecto = \DB::table('proyectos')
        ->select('proyectos.*')
        ->orderBy('id','DESC')
        ->get();


        //return view('coordinador.add') ->with('docentes',$docentes);
        return view('docente.index') ->with('docentes', $docentes);
    }
}
