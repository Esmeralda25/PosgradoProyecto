<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class docenteController extends Controller
{
    public function index()
    {
        $docentes = docente::all();
        return view('coordinador.add') ->with('docentes',$docentes);
    }
}
