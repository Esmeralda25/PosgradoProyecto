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
        $relaciones = Rubrica::find(1)->criteriosProyecto; //Esto me sirve para traer todos los criterios de la rubrica ing.
        return view('docente.evaluar', compact('proyecto','relaciones'));
    }

    public function store(Request $request){
       
        try{

          DB::beginTransaction();


            $nuevos = (
                ['proyectos_id'=> $request->proyectos_id,
                 'calificacion'=> $request->valor,
                 'concepto'=> $request-> concepto,
                 'observacion' => $request->observacion,
                 'fecha'=> date('Y-m-d H:i:s')]
            ); 

            
            foreach($nuevos as $nuevo){

               $id = DB::table('evaluaciones')->insertGetId([
                    'proyectos_id'=>$nuevo,
                    'calificacion'=>$nuevo,
                    'fecha'=> date('Y-m-d H:i:s')
                ]);

                DesgloceEvaluacion::create([
                    'evaluaciones_id'=>$id,
                    'docentes_id'=>$nuevo,
                    'concepto'=>$nuevo,
                    'valor'=>$nuevo,
                    'observacion'=>$nuevo,
                ]);

                
            }
            
            
            
            
            
            // calificacion es el promedio de los valores obtenidos en esa evaluacion....
          //si haces un return redirect no se ejecutan las lineas que siguen ....



            //nunca se ejecutara lo siguiente
            // de donde sacas nuevo, en el que vas a iterar es en $request->calificacion
            // y para cada desgloce de evaluacion debes saber en que criterio se le pone la calificacion y con que obseravaciones.
            //(concepto, valor, poderacion)


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
