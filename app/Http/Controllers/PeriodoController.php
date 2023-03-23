<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Periodo;
use App\Models\Generacion;
use App\Http\Requests\PeriodoRequest;
use App\Models\Proyecto;
use App\Models\Comite;
use App\Http\Requests\ComiteRequest;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Response;
class PeriodoController extends Controller
{
    public function index($geneacion_id){ 
        //$this->authorize('perio', $id);
        $generacion = Generacion::find($geneacion_id);        
        return view('coordinador.generacion.periodo.index', compact('generacion'));
    
    }

    public function create($generacion_id){
//        $pe  = \Session::get('usuario' );
//        $pe = $pe->fresh();
//        $generacion = Generacion::find($geneacion_id);
        return view('coordinador.generacion.periodo.create', compact('generacion_id') );
        
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\PeriodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeriodoRequest $request) 
    {
        $valores = $request->all();
        periodo::create($valores);
        $id =$valores['generacion_id'];
        return redirect(route('periodos.index',$id))->with('message','Periodo agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$this->authorize('perio', $id);
        $periodo = Periodo::find($id);
        return view('coordinador.generacion.periodo.edit', compact('periodo') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\PeriodoRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeriodoRequest $request, $id)
    {
        $periodo = $request->all();
        if(is_null($periodo['estado'])){
//            $request->errors()->add('estado', 'El periodo se encuentra en un estado no valido');
            return redirect()->back()->with('message','El periodo se encuentra en un estado no valido');
        }

        
        $registro = Periodo::find($id);
        $registro->fill($periodo);
        $registro->save();
        return redirect(route('periodos.index',$registro->generacion_id))->with('message','Periodo actalizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrado = Periodo::find($id);

        try{
            $borrado->delete();
            return redirect(route('periodos.index', $borrado->generacion_id))->with('message','Periodo eliminado correctamente');
           
        } catch (\Throwable $th) {
            return redirect(route('periodos.index', $borrado->generacion_id))->with('message','No se pudo eliminar el periodo ya que se encuentra activo');

        }
    }

    public function estadistico(){
        return view('coordinador.estadistico.index');
    }

    public function proyectos($periodo_id)
    {
        //$this->authorize('perio', $id);
        $periodo = Periodo::find($periodo_id);
        $proyectos = $periodo->proyectos;
        return view('coordinador.generacion.periodo.proyectos', compact('proyectos') );
    }
    public function cambiarComite($id_proyecto){
        //$this->authorize('comit',$id_proyecto);
        $pe = \Session::get('usuario');
        $pe = $pe->fresh(); 
        $proyecto = proyecto::find($id_proyecto);
        $docentes = $pe->docentes;
        return view('coordinador.generacion.periodo.cambiar-comite',compact('proyecto','docentes')); //la convencion dice que las vistas son en plural pero a un proyecto no se le asignan varios comites
    }
    public function cambiarComitePut(ComiteRequest $request, $id)
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
        return redirect(route('periodos.proyectos',$proyecto->periodo->id))->with('message','Comite actualizado correctamente');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reinscripcion($periodo_id)
    {
        $pe = \Session::get('usuario');
        $pe = $pe->fresh(); 
        $periodo = Periodo::find($periodo_id);
        return view('coordinador.generacion.periodo.reinscripcion', compact('periodo'));   
    }
    public function EstudianteGet(Request $request,$periodo_id)
    {
        $estudiantes = Periodo::join('estudiantes', 'estudiantes.periodo_id', '=', 'periodos.id')
        ->select('estudiantes.id','estudiantes.nombre','periodos.id as pid', 'periodos.nombre as periodo')
        ->where('estudiantes.periodo_id','=',$periodo_id)
        ->get();
        return Response::json($estudiantes);

         //view('coordinador.generacion.periodo.periodo-estudiante', compact('estudiantes'));   
    }
    public function EstudiantePatch(Request $request,$periodo_id)
    {
        $ides= $request->input("check");
        foreach ( $ides as $key => $value) {
            $esrudiantes = Estudiante::find($key);
            $esrudiantes->periodo_id = $periodo_id;
            $esrudiantes->save();
        }
        return redirect(route('periodos.reinscripcion',$periodo_id))->with('message','Reinscripcion exitosa');
    }

}
