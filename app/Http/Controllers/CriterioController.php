<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Criterio;
use App\Models\Rubrica;
use App\Http\Requests\CriterioRequest;


class CriterioController extends Controller
{
    public function index($id){ 
        //$this->authorize('crit', $id);
        $rubrica = Rubrica::find($id);
        $criterios = $rubrica->criterios;
        return view('coordinador.rubrica.criterio.index', compact('rubrica','criterios'));
    }

    public function create($id){
        
        $rubricas = Rubrica::find($id);        
        return view('coordinador.rubrica.criterio.create')->with('rubrica',$rubricas);//compact('rubricas'));
        
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
        $criterios = Criterio::find($id);
        return view('coordinador.rubrica.criterio.edit')->with('criterio',$criterios); 
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
        //este id es el id del criterio necesitas saber de que rubrica estas hablando.
        $idr = $registro->rubrica->id;
        return redirect("/criterios/$idr")->with('message','Citerio actualizado correctamente');
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
            Criterio::destroy($id);
            return redirect("/criterios/$id")->with('message','Criterio eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect("/criterios/$id")->with('message','No se pudo eliminar el criterio, verifiue');
        }
    }

}

