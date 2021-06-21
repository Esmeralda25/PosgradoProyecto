<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compromiso;
 
class CompromisosController extends Controller
{
    public function index(){
       
        $compromisos = Compromiso::orderBy('id','DESC')->get();                  
        return view('coordinador.Compromisos.index')->with('compromisos', $compromisos);
    }
    public function create(){ 
        //return view('coordinador.Compromisos.create');
    }
    
    public function store(Request $request) 
    {
        //guardar los datos que vengan
        $compromiso = new Compromiso;
        $compromiso->fill( $request->all() );
        $compromiso->save();
        return redirect("/Compromisos"); //que me envie con un mensaje

        
       
        

        //return redirect('/pes');
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
       $compromiso = Compromiso::find($id);
        return view('coordinador.Compromisos.edit')->with('compromiso',$compromiso);
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
        /* $generacion = $request->all();
        $registro = Generacion::find($id);
        $registro->fill($generacion);
        $registro->save();
        return redirect("/generaciones"); */
        $compromiso = $request->all();
        $registro = Compromiso::find($id);
        $registro->fill($compromiso);
        $registro->save();
        return redirect("/Compromisos");

        
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
            Compromiso::destroy($id);
            return redirect('Compromisos');//detalle: que avise que si borro
            alert("Se borró correctamente");
        } catch (\Throwable $th) {
            return redirect('Compromisos');//detalle: que avise que no pudo borrar
            alert("No se pudo borrar");
        }
    }
}
