<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\Rubrica;
use App\Models\Evaluacion;
use App\Models\Criterio;


use Illuminate\Http\Request;

class evaluarController extends Controller
{
    public function index($id){
        $proyecto = Proyecto::find($id);
        $relaciones = Rubrica::find(1)->criteriosProyecto;
        return view('docente.evaluar', compact('proyecto','relaciones'));
    }

    public function store(Request $request){

        $valores = $request->all();
        dd($valores);
        Evaluacion::create($valores);
        $id =$valores['proyectos_id'];
        return redirect("/docente");
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
