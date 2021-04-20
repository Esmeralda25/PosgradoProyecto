<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\docente;

class docenteController extends Controller
{
    public function index()
    {
        //$add = Add::all();
        return view('docente.index');//->with('add',$add);
    }
}
