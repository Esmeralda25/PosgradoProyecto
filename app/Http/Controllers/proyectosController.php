<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\proyecto;
use App\Models\estudiante;
use App\Models\docente;
use App\Http\Requests\proyectosRequest;
use Illuminate\Support\Facades\Auth;

class proyectosController extends Controller
{

public function index(){


    $usuario = \Session::get('usuario');
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
    public function asignarAsesores($id_proyecto){
        $id_proyecto=2;
        $proyecto = proyecto::find($id_proyecto);
        $docentes = docente::all(); //investigar sub consultas y joins
        return view('coordinador.asignarProyecto.asesor',compact('proyecto','docentes'));
    }
}