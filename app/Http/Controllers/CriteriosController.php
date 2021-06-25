<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Criterio;
use App\Models\Rubrica;

class CriteriosController extends Controller
{
    public function index($id){ 
        $rubrica = Rubrica::find($id);
        $criterios = Criterio::where('Rubricas_id', $rubrica->id)->get();
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
        $id =$valores['Rubricas_id'];
        return redirect("/criterios/$id");
        
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
        return redirect("/criterios/$id");
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
            return redirect('/criterios');//detalle: que avise que si borro
            alert("Se borró correctamente");
        } catch (\Throwable $th) {
            return redirect('/criterios');//detalle: que avise que no pudo borrar
            alert("No se pudo borrar");

        }
    }

}

