<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Generacion;
use App\Models\Proyecto;
use App\Models\Estudiante;
use App\Models\Periodo;

use App\Http\Requests\GeneracionRequest;


  

class GeneracionController extends Controller
{
    public function index(){ 
         //$this->authorize('listar');
        $pe = \Session::get('usuario');
        $pe= $pe->fresh();
        $generaciones = Generacion::where('pe_id', $pe->id)->orderBy('nombre','DESC')->paginate(8);
        return view('coordinador.generacion.index',compact('generaciones'));
    
    }

    public function create(){

        //$this->authorize('create', Generacion::class);
        $pe = \Session::get('usuario');
        $pe= $pe->fresh();

        $pe_id = $pe->id;

        return view('coordinador.generacion.create', compact('pe_id'));

        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\GeneracionRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(GeneracionRequest $request) 
    {
        try {
            generacion::create(request()->all());
        } catch (\Throwable $th) {
            return redirect(route('generaciones.index'))->with('message','Error al crear la generacion: ' . $th->getMessage() );
        }
        return redirect(route('generaciones.index'))->with('message','Generacion guardada correctamente');
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
        //$this->authorize('listar',$id);
        $generacion = Generacion::find($id);
        return view('coordinador.generacion.edit',compact('generacion',)); 
    }

    /**
     * Update the specified resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $generacion = $request->all();
        $registro = Generacion::find($id);
        $registro->fill($generacion);
        $registro->save();
        return redirect(route('generaciones.index'))->with('message','Generacion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    //$this->authorize('generacion',$id);
    {
        try{
            Generacion::destroy($id);
            return redirect(route('generaciones.index'))->with('message','Generacion eliminada correctamente');
        } catch (\Throwable $th) {
            return redirect(route('generaciones.index'))->with('message','Esta generación no se pudo borrar ya que tiene periodos agregados');
        }
    }

    public function estadisticos($id_gen){
		$generacion = Generacion::find($id_gen);
		$generacionData = Generacion::find($id_gen)->get();

		if( count($generacionData) > 0 ) {
			$periodos = $generacion->periodos;

			$arr_ids_periodos = array();
			foreach ($periodos as $key => $value) {
				array_push($arr_ids_periodos, $value->id);
			}
			$proyectos = Proyecto::whereIn('periodo_id', $arr_ids_periodos )->get();
			$estudiantes = Estudiante::whereIn('periodo_id', $arr_ids_periodos )->get(); //revisar si no da error periodo_id

			$arr_proyectos = array();
			foreach ($proyectos as $key) {
				array_push($arr_proyectos, $key);
			}

			$chart_gen = [
				"data_info" => [ "PERIODOS" => count($periodos) ,
								 "PROYECTOS" => count($proyectos),
								 "ESTUDIANTES" => count($estudiantes)
								],
				"data_proyectos" => $arr_proyectos
			];

		}else {
			$chart_gen = [
				"data_info" => [ -1,-1,-1]
			];
		}

		$chart_gen = json_encode($chart_gen);

        return view('coordinador.generacion.estadisticos',compact('id_gen','generacion','chart_gen'));
    }

    public function estadisticos_generacion($id_gen) {
		$generacion = Generacion::find($id_gen);
		$generacionData = Generacion::find($id_gen)->get();

		if( count($generacionData) > 0 ) {
			$periodos = $generacion->periodos;

			$arr_ids_periodos = array();
			foreach ($periodos as $key => $value) {
				array_push($arr_ids_periodos, $value->id);
			}
			$proyectos = Proyecto::whereIn('periodo_id', $arr_ids_periodos )->get();
			$estudiantes = Estudiante::whereIn('periodo_id', $arr_ids_periodos )->get(); //revisar si no da error periodo_id

			$arr_proyectos = array();
			foreach ($proyectos as $key) {
				array_push($arr_proyectos, $key);
			}

			$chart_gen = [
				"data_info" => [ "PERIODOS" => count($periodos) ,
								 "PROYECTOS" => count($proyectos),
								 "ESTUDIANTES" => count($estudiantes)
								],
				"data_proyectos" => $arr_proyectos
			];

		}else {
			$chart_gen = [
				"data_info" => [ -1,-1,-1]
			];
		}

		$chart_gen = json_encode($chart_gen);

		echo $chart_gen;
    }

}
    


