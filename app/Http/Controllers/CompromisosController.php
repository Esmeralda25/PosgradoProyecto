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
        return view('coordinador.Compromisos.edit');//->with('pe',$pe);
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
        //
    }
}
