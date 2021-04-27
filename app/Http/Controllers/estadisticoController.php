<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estadisticoController extends Controller
{
    public function index(){
       
        return view('coordinador.estadistico.index');
    }
}
