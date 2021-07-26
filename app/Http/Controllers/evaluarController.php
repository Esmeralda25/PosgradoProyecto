<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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

            $valores = DB::table('evaluaciones')->insertGetId(
                ['proyectos_id'=> $request->proyectos_id, 
                 'calificacion'=>$request->calificacion,
                 'observaciones'=>$request->observaciones,
                 'fecha'=> date('Y-m-d H:i:s')]
            ); 

            return redirect('/docentes');

            foreach($nuevo as $cal){
                $cal->id;

                $cal = $request->all();
                DesgloceEvaluacion::create($cal);

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
