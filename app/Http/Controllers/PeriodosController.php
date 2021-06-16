<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Periodo;
use App\Models\Generacion;
use App\Models\Rubrica;

class PeriodosController extends Controller
{
    public function index($id){ 
        $generacion = Generacion::find($id);
        $periodos = \DB::table('periodos')
        ->get();
        return view('coordinador.periodo.index', compact('generacion','periodos'));
    
    }

    public function create($id){
        
        $generacion = Generacion::find($id);
        $rubricas = Rubrica::all();
        
        
        //SI NO AHY RUBICAS DEBE REGRESAR A "PERIDOS" pero avisando que no hay rubricas
        return view('coordinador.periodo.create', compact('generacion','rubricas') );
        
    }
    
    public function store(Request $request) 
    {
        $valores = $request->all();
        periodo::create($valores);
        $id =$valores['generacion_id'];
        return redirect("/periodos/$id");
        
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
        $periodo = Periodo::find($id);
        return view('coordinador.periodo.edit')->with('periodo',$periodo); 
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
        return redirect("/generaciones");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function estadistico(){
        return view('coordinador.estadistico.index');
    }
}
