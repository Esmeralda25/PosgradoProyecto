<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\proyecto;
use App\Models\estudiante;
use App\Http\Requests\proyectosRequest;
use Illuminate\Support\Facades\Auth;

class proyectosController extends Controller
{

public function index(){


//    $usuario = \Session::get('usuario');
//    echo "entra estudiante: $usuario->id";

    //checar en que moemnto estamos
    //si tiene proyecto lo muestro si no que lo cree
    return view('estudiante.proyectos');

}
    

    public function Store(Request $request){
        //dd($request-> all());
        proyecto::create(request()->all());
        //$proyecto = new Proyecto;
        //$proyecto->Titulo = request()->Titulo;
        //$proyecto->Hipotesis = request()->Hipotesis;
        //$proyecto->Objetivos = request()->Objetivos;
        //$proyecto->Reporte = request()->Reporte;
        //$proyecto->ProyectosCol = request()->ProyectosCol;
        //$proyecto->comite = request()->comite;
        //$proyecto->avance = request()->avance;
        //$proyecto->estudiantes_id = request()->estudiantes_id;
        

    } 

}