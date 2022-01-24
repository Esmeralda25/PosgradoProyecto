<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantemainController extends Controller
{
    public function index(){
       
        return view('estudiante.mainestudiante2');
    }
}
