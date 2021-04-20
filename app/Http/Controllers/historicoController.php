<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historicoController extends Controller
{
    public function index(){
       
        return view('docente.historico');
    }
}
