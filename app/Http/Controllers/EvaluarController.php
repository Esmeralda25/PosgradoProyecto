<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;
use App\Models\Rubrica;
use App\Models\Evaluacion;
use App\Models\DesgloceEvaluacion;
use App\Models\Evidencia;
use App\Models\Reporte;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EvaluarController extends Controller
{
    public function create($id){        
        $proyecto = Proyecto::find($id);
        $rubrica = $proyecto->estudiante->semestre->rubrica;
        if($rubrica->id == 0) {
            echo "Rubrica no establecida para el semestre a evaluar.";
            die;
        };

        $criterios = $rubrica->criterios;
        return view('docente.evaluar', compact('proyecto','criterios'));
    }

    public function store(Request $request){
        $usuario  = \Session::get('usuario' );
        $id_docente = $usuario->id; 
        try{
          DB::beginTransaction();
            $nueva_evaluacion = Evaluacion::create([
                'proyecto_id'=> $request->proyecto_id,
                'fecha'=> date('Y-m-d H:i:s'),
                'docente_id' =>$id_docente,
                'periodo_id'=> $request->periodo_id,
                ]  );
            $conceptos=$request->input('concepto');
            $observaciones=$request->input('observacion');
            $valores=$request->input('valor');
            $i=0;
            $suma=0;
            foreach($valores as $calif){
                $datos = [
                    'evaluacion_id'=>$nueva_evaluacion->id,
                    'docente_id'=>$id_docente,
                    'concepto'=>$conceptos[$i],
                    'valor'=> $calif,
                    'observacion'=>$observaciones[$i],
                ];
                DesgloceEvaluacion::create($datos);
                $i++;
                $suma += $calif;
            }
            $promedio = $suma / $i;
            $nueva_evaluacion->calificacion = $promedio;
            $nueva_evaluacion->save();
            DB::commit();
            return redirect("inicio")->with('message','Calificaciones asignadas al proyecto');
        } catch (\Exception $e){
            DB::rollBack();
            return redirect("inicio")->with('message','UPS... error: ' . $e->getMessage());
        }
    } 

    public function promedioSemestrales($id){
        $proyecto = Proyecto::find($id);
        return view('estudiante.seguimineto' , compact('proyecto'));
    }

    public function show($id){
        $proyecto = Proyecto::find($id);
        return view('estudiante.seguimineto' , compact('proyecto'));
    }    
/*
    public function verReportes($id){
        $pdf = Reporte::find($id);
        $pathToFile = storage_path('app/evidencias').'/'.$pdf->reporte;
        return response()->download($pathToFile);        
     }
*/

    public function porcentaje($id){
    
        $proyecto = Proyecto::find($id);
        return view('docente.porcentaje',compact('proyecto'));
    }

    public function guardarAvance(Request $request,$id){
        try {
            $proyecto = Proyecto::find($id);
            $proyecto->avance= $request->input('avance');
            $proyecto->save();
            return redirect("inicio")->with('message','Avance actualizado al proyecto');
        } catch (\Exception $e){
            DB::rollBack();
            return redirect("inicio")->with('message','UPS... error: ' . $e->getMessage());
        }
    
    }

    
}
