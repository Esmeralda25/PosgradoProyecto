<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Proyecto;
use App\Models\Rubrica;
use App\Models\Evaluacion;
use App\Models\DesgloceEvaluacion;
use App\Models\Criterio;


use Illuminate\Http\Request;

class evaluarController extends Controller
{
    public function index($id){
        $proyecto = Proyecto::find($id);
        $rubica_usada = $proyecto->estudiante->semestreActual->rubrica;
        $criterios = Rubrica::find($rubica_usada)->criteriosProyecto; //Esto me sirve para traer todos los criterios de la rubrica ing.
        return view('docente.evaluar', compact('proyecto','criterios'));
    }

    public function store(Request $request){
        $usuario  = \Session::get('usuario' );
        $id_docente = $usuario->id; 
        try{
          DB::beginTransaction();
            $nueva_evaluacion = Evaluacion::create([
                'proyectos_id'=> $request->proyectos_id,
                'fecha'=> date('Y-m-d H:i:s')
                ]  );
//                echo "agrego una nueva evaluacion";
            //por cada valor voy a guardarlo en la tabla de desgloce
            $conceptos=$request->input('concepto');
            $observaciones=$request->input('observacion');
            $valores=$request->input('valor');
            $i=0;
            $suma=0;
//           var_dump($conceptos);
//            var_dump($observaciones);
//              var_dump($valores);
            foreach($valores as $calif){
                $datos = [
                    'evaluaciones_id'=>$nueva_evaluacion->id,
                    'docentes_id'=>$id_docente,
                    'concepto'=>$conceptos[$i],
                    'valor'=> $calif,
                    'observacion'=>$observaciones[$i],
                ];
                echo "<hr>";
                print_r($datos);
                echo "<hr>";
                DesgloceEvaluacion::create($datos);
                $i++;
                $suma += $calif;
            }
            $promedio = $suma / $i;
            $nueva_evaluacion->calificacion = $promedio;
            $nueva_evaluacion->save();
            DB::commit();
            return redirect("/docentes");
        } catch (\Exception $e){
            echo $e->getMessage();
            DB::rollBack();
        }
    }

    public function show($id){
        $proyecto = Proyecto::find($id);
        $nuevo = Evaluacion::get();
        return view('docente.historico', compact('proyecto','nuevo'));
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
