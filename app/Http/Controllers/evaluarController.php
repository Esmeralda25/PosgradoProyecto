<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;

use Illuminate\Http\Request;

class evaluarController extends Controller
{
    public function index($id){
        $proyecto = Proyecto::find($id);
        return view('docente.evaluar', compact('proyecto'));
    }
}
