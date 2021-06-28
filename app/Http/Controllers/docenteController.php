<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Proyecto;

class docenteController extends Controller
{ 
    public function index()
    {
        $mostrar= DB::table("proyectos")
        ->union(DB::table("estudiantes"))
        ->get();
        //return view('coordinador.add') ->with('docentes',$docentes);
        return view('docente.index', compact('mostrar'));
    }
}
