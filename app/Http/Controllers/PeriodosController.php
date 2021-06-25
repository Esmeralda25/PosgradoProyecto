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
        $periodos = Periodo::where('generacion_id', $generacion->id)->get();
        
        return view('coordinador.periodo.index', compact('generacion','periodos'));
    
    }

    public function create($id){
        
        $generacion = Generacion::find($id);
        $rubricas = Rubrica::all();
        
        
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
        return redirect("/periodos/$registro->generacion_id");
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
            return redirect('periodos');//detalle: que avise que si borro
            alert("Se borró correctamente");
        } catch (\Throwable $th) {
            return redirect('periodos');//detalle: que avise que no pudo borrar
            alert("No se pudo borrar");

        }
    }

    public function estadistico(){
        return view('coordinador.estadistico.index');
    }
}
