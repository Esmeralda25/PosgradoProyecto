<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Estudiante;
use App\Models\Docente;
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
        
        proyecto::create(request()->all());
        
        

    } 
    public function asignarAsesores($id_proyecto){
        $pe = \Session::get('usuario');

        

        
        $proyecto = proyecto::find($id_proyecto);
        $docentes = $pe->docentes;
        
        return view('coordinador.asignarProyecto.asesor',compact('proyecto','docentes'));
    }
}