<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompromisosadquiridosController extends Controller
{
    public function index()
    {
        //PLANTILLA DONDE EL ESTUDIANTE AGREGA PROYECTO
        return view('estudiante.compromisosadquiridos');//->with('add',$add);
    }
}
