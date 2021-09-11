<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Criterio;
use App\Models\Rubrica;

class CriteriosController extends Controller
{
    public function index($id){ 
        //el id que envias es el id del criterio no de la rubrica
        $rubrica = Rubrica::find($id);
        $criterios = Criterio::where('rubrica_id', $rubrica->id)->get(); //las convenciones dicen que todos los campos osn en minusculas, esta es una llave foranea que debe ser "rubrica_id"
        return view('coordinador.criterio.index', compact('rubrica','criterios'));
    
    }

    public function create($id){
        
        $rubricas = Rubrica::find($id);
        
        return view('coordinador.criterio.create')->with('rubrica',$rubricas);//compact('rubricas'));
        
    }
    
    public function store(Request $request) 
    {
        $valores = $request->all();
        Criterio::create($valores);
        $id =$valores['rubrica_id'];
        return redirect("/criterios/$id")->with('message','Criterio agregado correctamente');
        
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
        $criterios = Criterio::find($id);
        return view('coordinador.criterio.edit')->with('criterio',$criterios); 
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
        return redirect("/criterios/$idr")->with('mensaje','Citerio actualizado correctamente');
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
            return redirect("/criterios/$id")->with('borrar','Criterio eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect("/criterios/$id")->with('nborrar','No se pudo eliminar el criterio, verifiue');
        }
    }

}

