<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addCompromisosController extends Controller
{
    public function index(){
       
        return view('coordinador.addCompromisos.index');
    }
    public function create(){
        

        return view('coordinador.addCompromisos.create');
    }
    
    public function store(Request $request) 
    {
        //$pes = new Pes();

        //$pes -> coordinador = $request ->get('coordinador');
        //$pes -> correo = $request -> get('correo');
        //$pes -> contraseña = $request -> get('contraseña');
        //$pes -> save();

        return redirect('/pes');
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
    public function edit()
    {
       // $pe= Pe::find($id);
        return view('coordinador.addCompromisos.edit');//->with('pe',$pe);
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
       // $valores = $request->all();
        //$registro = Pe::find($id);

       // $registro->fill($valores);

        //$registro->save();
        return redirect("/addcompromisos");
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
}
