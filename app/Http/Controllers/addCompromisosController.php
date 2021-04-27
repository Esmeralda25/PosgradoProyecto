<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addCompromisosController extends Controller
{
    public function index(){
       
        return view('coordinador.addCompromisos.index');
    }
}
