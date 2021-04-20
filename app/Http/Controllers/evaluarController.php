<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class evaluarController extends Controller
{
    public function index(){
     
        return view('docente.evaluar');//->with('pes',$pes);
    }
}
