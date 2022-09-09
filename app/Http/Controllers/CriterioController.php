<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Criterio;
use App\Models\Rubrica;
use App\Http\Requests\CriterioRequest;


class CriterioController extends Controller
{
    public function index($rubrica_id){ 
        //$this->authorize('crit', $id);
        $rubrica = Rubrica::find($rubrica_id);
        $criterios = $rubrica->criterios;
        return view('coordinador.rubrica.criterio.index', compact('rubrica','criterios'));
    }

    public function create($rubrica_id){
        $rubrica = Rubrica::find($rubrica_id);        
        return view('coordinador.rubrica.criterio.create', compact('rubrica_id','rubrica'));
        
    }
    
    public function store(Request $request) 
    {
        $valores = $request->all();
        Criterio::create($valores);
        $id =$valores['rubrica_id'];
        return redirect(route("criterios.index", $id))->with('message','Criterio agregado correctamente');   
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
        //$this->authorize('crit', $id);
        $criterio = Criterio::find($id);
        return view('coordinador.rubrica.criterio.edit',compact('criterio')); 
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
        $criterios = $request->all();
        $registro = Criterio::find($id);
        $registro->fill($criterios);
        $registro->save();
        $idr = $registro->rubrica->id;
        return redirect(route('criterios.index',$idr))->with('message','Citerio actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $critero = Criterio::find($id);
        $idr = $critero->rubrica->id;
        try{
            $critero->delete();
            return redirect(route('criterios.index',$idr))->with('message','Criterio eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect(route('criterios.index',$idr))->with('message','No se pudo eliminar el criterio, verifiue:  ' . $th->getMessage());
        }
    }
}

