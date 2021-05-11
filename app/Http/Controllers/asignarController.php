<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyectos;

class asignarController extends Controller
{
    public function index(){
        $proyectos = \DB::table('proyectos')
        ->select('proyectos.*')
        orderBy('id','DESC')
        get();
        return view('coordinador.asignarProyecto.asignar');with->('proyectos',$proyectos);
    }
}
