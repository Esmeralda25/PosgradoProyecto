<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Periodo;
use App\Models\Generacion;
use App\Models\Rubrica;

class PeriodosController extends Controller
{
    public function index($id){ 
        //$this->authorize('perio', $id);
        $generacion = Generacion::find($id);
        $periodos = Periodo::where('generacion_id', $generacion->id)->get();
        
        return view('coordinador.periodo.index', compact('generacion','periodos'));
    
    }

    public function create($id){
        $pe  = \Session::get('usuario' );
        $pe = $pe->fresh();

        $generacion = Generacion::find($id);
        $rubricas = Rubrica::where('pe_id', $pe->id)->get();

        return view('coordinador.periodo.create', compact('generacion','rubricas') );
        
    }
    
    public function store(Request $request) 
    {
        $valores = $request->all();
        periodo::create($valores);
        $id =$valores['generacion_id'];
        return redirect("/periodos/$id")->with('message','Periodo agregado correctamente');
        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

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
        $rubricas = Rubrica::all();
        
        
        return view('coordinador.periodo.edit', compact('periodo','rubricas') );
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
        $periodo = $request->all();
        $registro = Periodo::find($id);
        $registro->fill($periodo);
        $registro->save();
        return redirect("/periodos/$registro->generacion_id")->with('mensaje','Periodo actalizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Periodo::destroy($id);
            return redirect("/periodos/$id")->with('borrar','Periodo eliminado correctamente');
           
        } catch (\Throwable $th) {
            return redirect("/periodos/$id")->with('nborrar','No se pudo eliminar el periodo ya que se encuentra activo');

        }
    }

    public function estadistico(){
        return view('coordinador.estadistico.index');
    }
}
