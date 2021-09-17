<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Adquirido;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Compromiso;
use App\Models\Actividad;
use App\Models\Periodo;
use Illuminate\Support\MessageBag;
use App\Http\Requests\proyectosRequest;
use Illuminate\Support\Facades\Auth;

class proyectosController extends Controller
{

    public function listarProyectos(){
        $usuario  = \Session::get('usuario' );
        $usuario = $usuario->fresh(); 
        $proyectos = $usuario->proyectos;
        return view('coordinador.proyectos.listar-proyectos',compact('proyectos')); //deberia de ser la sub carpeta proyectos y asi poner en sub carpetas usuarios rubricas, compromisos y generaciones
 

    }

    public function registrar(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        return view('estudiante.registrar', compact('estudiante'));

    }
    public function store(Request $request){
        proyecto::create(request()->all()); 
        return redirect('/estudiantes'); //error al redireccionar, manda estado del estudiante nulo
    } 
 
    public function show()
    {
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 

        return view('estudiante.seguimineto' , compact('estudiante'));//y creo que deberia de enviar el proyecto no el estudiante.
    }


    public function edit(){ 
        $estudiante = \Session::get('usuario');
        //esta adquiriendo compromisos, estas 3 lineas estaban anteriormente
        $estudiante = $estudiante->fresh(); 
        $compromisos = Compromiso::where('pes_id', $estudiante->pe->id) ->orWhereNull('pes_id')->get();
        $periodos = Estudiante::where('periodos_id', $estudiante->periodos)->get();
        return view('estudiante.comprometerse', compact('estudiante','compromisos', 'periodos'));  
    
        
    }


    public function update(Request $request){
    

        if($request->periodos_id && $request->proyectos_id && $request->que && $request->cuantos_prog){
            $rules = [
                'cuantos_prog'=>'required'
            ];
            $messages = [
                'cuantos_prog.required' => 'No puedes dejar los campos vacios'
            ];
            $this->validate($request, $rules, $messages);
            $nuevo = new Adquirido();
            $nuevo->fill($request->all());
            $nuevo->save();
            return redirect('/comprometerse')->with('message','Se agregó compromiso correctamente.');
        } else {
            $rules = [
                'nombre'=>'required',
                'periodo'=>'required'
            ];
            $messages = [
                'nombre.required' => 'No puedes dejar el campo "Actividad" vacio',
                'periodo.required' => 'No puedes dejar el campo "Periodo" vacio'
            ];
            $this->validate($request, $rules, $messages);

            $nuevop = new Actividad();
            $nuevop->fill($request->all());
            $nuevop->save();
            return redirect('/comprometerse')->with('message','Se agregó actividad correctamente.');
        }
        
    }
 //REPORTAR Y GUARDARREPORTE- REPORTAR AVANCE
    public function reportar(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        return view('estudiante.reportar' , compact('estudiante'));//y creo que deberia de enviar el proyecto no el estudiante.
    }

    public function guardarReporte(Request $request){

        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 

        $cuales = $request->input('cual');
        $logrados = $request->input('logrados');
        
        foreach ($cuales as $key => $cual) {
            //lo siguiente debe estar en un try-catch puesto que puede fallar, falta validar tambien si no subio una imagen o un documento
            try{
                //validar tambien si no subio una imagen o un documento
                /* $rules = [
                    'evidencia'=>'required'
                ];
                $messages = [
                    'evidencia.required' => 'Debes subir una imagen o un documento.'
                    
                ];
                $this->validate($request, $rules, $messages); */
    
            $compromiso = Adquirido::find($cual);        
            $compromiso->cuantos_cumplidos = $logrados[$key];
            $compromiso->save(); 

            }catch(\Throwable $th){

            }
        }
        //falta subir los archivos y falta mostrarlos en la vista de reportar y cuando el docente evalua tambien, 

        
        return redirect('reportar');
//        dd($request->all());

    }


    public function index(){
        $usuario = \Session::get('usuario');
        $usuario = $usuario->fresh(); 
        return view('estudiante.proyectos', compact('compromisos'));

    }
        
 
    public function asignarComite($id_proyecto){
        $pe = \Session::get('usuario');
        $pe = $pe->fresh(); 
        $proyecto = proyecto::find($id_proyecto);
        $docentes = $pe->docentes;
        return view('coordinador.proyectos.asignar-comite',compact('proyecto','docentes')); //la convencion dice que las vistas son en plural pero a un proyecto no se le asignan varios comites
    }

    public function actualizarCompromisos(Request $request, $id){
        //dd($request->all());
        //manejo de transacciones en base de datos
        //DB::beginTransaction()
        //validaciones       
        $compromiso = new Compromiso;
        $compromiso->fill($request->all());
        $compromiso->save();
        $proyecto = Proyecto::find($id);
        $proyecto->compromiso = $compromiso->id;
        $proyecto->save();
        return redirect("/estudiantes");
    }

    public function destroy($id)
    { 

    $adquirido = Adquirido::find($id);
    $actividad = Actividad::find($id); 
//compromisos
    if(!is_null($adquirido)){
        try{
            Adquirido::destroy($id);
            return redirect('comprometerse')->with('borrar','Compromiso eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect('comprometerse');
        }
    }
    else if(!is_null($actividad)){
    //actividades
        try{
            Actividad::destroy($id);
            return redirect('comprometerse')->with('borrar','Actividad eliminada correctamente');
        } catch (\Throwable $th) {
            return redirect('comprometerse');
        }
    }

        
    }

}