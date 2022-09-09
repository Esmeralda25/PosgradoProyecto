<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evidencia;
use App\Models\Reporte;
use App\Models\Adquirido;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class AdquiridoController extends Controller
{
    public function index()
    {
        //PLANTILLA DONDE EL ESTUDIANTE AGREGA PROYECTO
        return view('estudiante.compromisosadquiridos');//->with('add',$add);
    }

    public function compromisoAdquirido(Request $request){
        //update de adquirido (compromiso adquirido) y el update de actividad
            $rules = [
                'cuantos_programo'=>'required|integer|min:1'
            ];
            $messages = [
                'cuantos_programo.required' => '¿Cuantos vas a programar?',
                'cuantos_programo.integer' => 'Deberia establecer un numero entero',
                'cuantos_programo.min' => 'Al menos debe programar uno',
            ];
            $validator = Validator::make($request->all(),$rules, $messages);
            if($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator, "compromisos");
            } else {
                $nuevo = new Adquirido();
                $nuevo->fill($request->all());
                $nuevo->save();
                return redirect( route('proyectos.comprometerse' ))
                    ->with('message','Es momento de decidir como alcanzar el objetivo')
                    ->with('mensaje_compromiso','Se agregó compromiso correctamente.') ;
            }        
    }
    public function destroy($id)
    { 
        try{
            Adquirido::destroy($id);
            return redirect( route('proyectos.comprometerse' ))
                ->with('message','Es momento de decidir como alcanzar el objetivo')
                ->with('mensaje_compromiso','Se elimino el compromiso correctamente.') ;
        } catch (\Throwable $th) {
            return redirect( route('proyectos.comprometerse' ))
                ->with('message','Es momento de decidir como alcanzar el objetivo')
                ->with('mensaje_compromiso','Error no esperado: ' . $th->getMessage() ) ;
        }
    }

    public function guardarReporte(Request $request){
        $mensajes = [];
        $errores = [];
        $alertas = [];
        
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        
        $ides = $request->input('ides');
        $compromisos = $request->input('compromisos');
        $metas = $request->input('metas');
        $reportados = $request->input('reportados');
        $archivos = $request->input('archivos');

        $logrados = $request->input('logrados');
        $evidencias=$request->file('evidencias');
        $reporte = $request->file('reporte');
        $reporte_actual  = $request->input('reporte_actual');
        
        
       // dd($evidencias);
        foreach ($ides as $indicex => $indice) {
            //validacion manual ya que se hace para cada uno de los elementos

            $que_comprometio = $compromisos[$indice];
            $cuantos_comprometio = $metas[$indice];
            $cuantos_tenia = $reportados[$indice];
            $archivo_actual = $archivos[$indice];

            //cuidado porque logrados y evidencias puede ser null
            $cuantos_logro  = is_null($logrados)    ? null : $logrados[$indice];

            $archivo        = is_null($evidencias)  ? null : (isset($evidencias[$indice]) ? $evidencias[$indice]:null);

            //Nevidencia    Nlogrados       error
            if(is_null($archivo) && is_null($cuantos_logro)) {
                continue;
                if(is_null($archivo_actual))
                    return redirect()->back()->withInput()->withErrors("1.- No subio la(s) evidencia(s) de $que_comprometio.");
                if(is_null($cuantos_tenia))
                    return redirect()->back()->withInput()->withErrors("2.- No establecio cuantas actividades de $que_comprometio logró.");
            }
            //Nevidencia    Slogrados       ok, warning
            if(is_null($archivo) && !is_null($cuantos_logro)) {
                array_push($alertas,"No evidenció haber logrado $cuantos_logro de $que_comprometio"); 
            }
            //Sevidencia    Nlogrados       ok, warning
            if(!is_null($archivo) && is_null($cuantos_logro)) {
                array_push($alertas,"No especifico cuantos logro de $que_comprometio"); 
            }

            //Sevidencia    Slogrados       ok


            try {
                DB::beginTransaction();
                    if(!is_null($cuantos_logro)){
                        $compromiso = Adquirido::findorfail($indice);     
                        $compromiso->cuantos_cumplio = $cuantos_logro;
                        $compromiso->save();                 
                    }
                    if(!is_null($archivo)){
                        $nombre_archivo = $estudiante->id . "_".  $estudiante->proyecto->id . "_" . $indice . "_e_" . $archivo->getClientOriginalName()  ;
                        $archivo->storeAs(
                            '',
                            $nombre_archivo,
                            'evidencias'
                        );
//                        $ret = Storage::putFileAs('evidencias', $archivo, $nombre_archivo,'evidencias' );
                        Evidencia::updateOrCreate(
                            ['adquirido_id' => $indice],
                            ['archivo' => $nombre_archivo]
                        );        
                    }
                DB::commit();
            } catch (\Throwable $th) {
                DB::rollBack();
                return redirect( route('proyectos.reportar' ))
                ->with('message','Es momento de decidir como alcanzar el objetivo')
                ->withErrors( "3.- Error:  " . $th->getMessage() . " en la linea " . $th->getLine() );
            }

        }


        if(is_null($reporte) && is_null($reporte_actual)){
            return redirect()->back()->withInput()->withErrors("4.- No subio su reporte.");
        }
        try {
            DB::beginTransaction();
            if(!is_null($reporte)){
                $nombre_archivo = $estudiante->id . "_".  $estudiante->proyecto->id . "_" . $estudiante->semestre->id  . "_r_" . $reporte->getClientOriginalName()  ;
                $reporte->storeAs(
                    '',
                    $nombre_archivo,
                    'evidencias'
                );
    
                $ret = Storage::putFileAs('evidencias', $reporte, $nombre_archivo );
                Reporte::updateOrCreate(
        //        Reporte::Create(
                    ['proyecto_id' => $estudiante->proyecto->id , 'periodo_id' => $estudiante->semestre->id ],
                    ['reporte' => $nombre_archivo]
                );                    
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect( route('proyectos.reportar' ))
            ->with('message','Es momento de decidir como alcanzar el objetivo')
            ->withErrors( "Error:  " . $th->getMessage() . " en la linea " . $th->getLine() );

        }
        return redirect( route('proyectos.reportar' ))
        ->with('message','Es momento de decidir como alcanzar el objetivo');
                
    }

}
