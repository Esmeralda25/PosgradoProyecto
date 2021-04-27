<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class asignarController extends Controller
{
    public function index(){
       
        return view('coordinador.asignarProyecto.asignar');
    }
}
