<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Generacion;




class generacionController extends Controller
{
    public function index(){
      
        return view('coordinador.generacion.index');//->with('pes',$pes);
    }

    public function create(){
        
        return view('coordinador.generacion.create');

        
    }
    
    public function store(Request $request) 
    {
        //$pes = new Pes();

        //$pes -> coordinador = $request ->get('coordinador');
        //$pes -> correo = $request -> get('correo');
        //$pes -> contraseña = $request -> get('contraseña');
        //$pes -> save();

        
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
    


