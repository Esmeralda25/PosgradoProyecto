<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportarController extends Controller
{
    public function index(){
       
        return view('estudiante.reportar');
    }
}
