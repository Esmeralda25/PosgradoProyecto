<?php

namespace App\Http\Controllers;
use App\Models\Rubrica;
use Illuminate\Http\Request;

class RubricaController extends Controller
{
    public function index(){ 
        $rubricas = \DB::table('rubricas')
        ->get();
        return view('coordinador.rubrica.index',compact('rubricas',$rubricas));
    }
 
    public function create(){
        
        return view('coordinador.rubrica.create');

        
    }
    
    public function store(Request $request) 
    {
        rubrica::create(request()->all());
        return redirect('/rubricas');
        
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
        $rubrica= Rubrica::find($id);
        return view('coordinador.rubrica.show')->with('rubrica',$rubrica);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rubrica = Rubrica::find($id);
        return view('coordinador.rubrica.edit')->with('rubrica',$rubrica); 
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
        $rubrica = $request->all();
        $registro = Rubrica::find($id);
        $registro->fill($rubrica);
        $registro->save();
        return redirect("/rubricas")->with('mensaje','Rubrica actualizada correctamente');
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
            Rubrica::destroy($id);
            return redirect('rubricas');//detalle: que avise que si borro
        } catch (\Throwable $th) {
            return redirect('rubricas');//detalle: que avise que no pudo borrar
        }
    }
}
    
