<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Periodo;
use App\Models\Generacion;
use App\Http\Requests\PeriodoRequest;
use App\Models\Rubrica;

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
}
