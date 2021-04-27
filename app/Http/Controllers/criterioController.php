<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class criterioController extends Controller
{
    public function index(){
       
        return view('coordinador.criterio.index');
    }
}
