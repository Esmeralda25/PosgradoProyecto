<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\Rubrica;


use Illuminate\Http\Request;

class evaluarController extends Controller
{
    public function index($id){
        $proyecto = Proyecto::find($id);
        $rubricas = rubrica::find($id);
        return view('docente.evaluar', compact('proyecto','rubricas'));
    }

    public function store(){

    }

    public function show($id){
        $proyecto = Proyecto::find($id);
        $calificaciones = Calificacion::find($id);
        return view('docente.historico', compact('proyecto','calificaciones'));
    }

    public function porcentaje($id){
    
        $proyecto = Proyecto::find($id);
        return view('docente.porcentaje')->with('proyecto',$proyecto);
    }

    public function guardarPorcentajes(Request $request, $id){
        $proyecto->avance = request()->avance;
        $registro = Proyecto::find($id);
        $registro->fill($proyecto);
        $registro->save();
        echo "Avance asignado";
        return redirect("/docentes");
    }

    
}
