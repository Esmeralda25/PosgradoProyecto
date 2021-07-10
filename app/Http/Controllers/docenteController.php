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
        $docente  = \Session::get('usuario' );
        echo "el docente $docente->nombre esta en ";
        
        $proyectos = $docente->proyectos();

        return view('docente.index', compact('proyectos'));
    }

}
