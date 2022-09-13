<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ComiteRequest;
use App\Models\Proyecto;
use App\Models\Adquirido;
use App\Models\Evidencia;
use App\Models\Estudiante;
use App\Models\Comite;
use App\Models\Compromiso;
use App\Models\Actividad;
use App\Models\Reporte;

use App\Http\Requests\ProyectoResquest;


class ProyectoController extends Controller
{

    public function listarProyectos(){
        $usuario  = \Session::get('usuario' );
        $usuario = $usuario->fresh(); 
        $proyectos = $usuario->proyectosSinComite()->get();
        return view('proyecto.listar-proyectos',compact('proyectos')); //deberia de ser la sub carpeta proyectos y asi poner en sub carpetas usuarios rubricas, compromisos y generaciones
    }
    public function asignarComite($id_proyecto){
        //$this->authorize('comit',$id_proyecto);
        $pe = \Session::get('usuario');
        $pe = $pe->fresh(); 
        $proyecto = proyecto::find($id_proyecto);
        $docentes = $pe->docentes;
        return view('proyecto.asignar-comite',compact('proyecto','docentes')); //la convencion dice que las vistas son en plural pero a un proyecto no se le asignan varios comites
    }
    public function asignarComitePut(ComiteRequest $request, $id)
    {
        $proyecto = Proyecto::find($id);
        if(is_null($proyecto->comite_id)){
            $comite = new Comite;
            $comite->fill($request->all());
            $comite->save();    
            $proyecto->comite_id = $comite->id;
            $proyecto->save();    
        }else{
            $comite =  Comite::find($proyecto->comite_id);
            $comite->fill($request->all());
            $comite->save();
        }
        return redirect(route('proyectos.sincomite'))->with('message','Comite asigado al proyecto correctamente');

    }

    public function create(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        $estudiante_id = $estudiante->id;
        return view('proyecto.create', compact('estudiante_id'));

    }
    public function store(ProyectoResquest $request){
        Proyecto::create(request()->all()); 
        return redirect(route('inicio'))->with('message','Proyecto registrado correctamente!'); //error al redireccionar, manda estado del estudiante nulo
    } 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ProyectoResquest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyectoResquest $request, $id)
    {
        $proyecto_data = $request->all();
        $registro = Proyecto::find($id);
        $registro->fill($proyecto_data);
        $registro->save();
        return redirect(route('inicio'))->with('message','Proyecto actualizado correctamente!'); 

    }
 
    public function show()
    {
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        $proyecto = $estudiante->proyecto;
        return view('estudiante.seguimineto' , compact('proyecto'));
    }


 //REPORTAR Y GUARDARREPORTE- REPORTAR AVANCE
    public function reportar(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        $proyecto = $estudiante->proyecto;
        return view('estudiante.reportar' , compact('proyecto'));
    }



    public function index(){
        $usuario = \Session::get('usuario');
        $usuario = $usuario->fresh(); 
        return view('estudiante.proyectos', compact('compromisos'));

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
    public function comprometerse(){ 
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        $compromisos = Compromiso::where('pe_id', $estudiante->pe->id) ->orWhereNull('pe_id')->get();
        $periodos = Estudiante::where('periodo_id', $estudiante->periodos)->get();
        return view('estudiante.comprometerse', compact('estudiante','compromisos'/*, 'periodos'*/));  
    }

}