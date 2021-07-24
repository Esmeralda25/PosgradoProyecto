<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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

        try{

            DB::beginTransaction();

            $valores = $request->all();
            $nuevo = implode($valores);
            Evaluacion::create($nuevo);
            $id =$nuevo['proyectos_id'];

            foreach($nuevo as $cal){
                echo $cal->id;

                $registro = $request->all();
                DesgloceEvaluacion::create($registro);

            }

            $registro = $request->all();
            $nuevas = Evaluacion::find($id);
            $nuevas->fill($registro);
            $nuevas->save();
            return redirect("/docentes");

            DB::commit();

    } catch (\Exception $e){
        DB::rollBack();
        
    }
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
