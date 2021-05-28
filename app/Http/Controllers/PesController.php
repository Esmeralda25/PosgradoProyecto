<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pe;




class PesController extends Controller
{
    public function index(){
        $pes = Pe::all();
        return view('pes.index')->with('pes',$pes);
    }

    public function create(){
        

        return view('pes.create');
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
    public function edit($id)
    {
        $pe= Pe::find($id);
        return view('pes.edit')->with('pe',$pe);
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
        $valores = $request->all();
        $registro = Pe::find($id);

        $registro->fill($valores);

        $registro->save();
        return redirect("/pes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
    

