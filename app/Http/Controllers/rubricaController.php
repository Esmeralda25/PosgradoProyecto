<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rubricaController extends Controller
{
    public function index(){
       
        return view('coordinador.rubrica.index');
    }
}
