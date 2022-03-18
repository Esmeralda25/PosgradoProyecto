<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Pe;

class PesController extends Controller
{
    public function index(){
        //$this->authorize('listar');
        $pes = Pe::paginate(7);
        
        //detalle:
        //como pasar variables a una vista 
        return view('pes.index',compact('pes'));


        //        return view('pes.index', $datos);
        //$pes = Pe::all();
        //return view('pes.index')->with('pes',$pes);
    }

    public function create(){
        

        return view('pes.create');
    }
    
    public function store(Request $request) 
    {
        $campos = request()->except('_token');
        if ( $campos['password'] !=  $campos['password2']) 
            return redirect()->back(); //detalle quiero que regrese y no vuelva a escribir y ademas que le avise  "error, no repetiste bien las contraseñas";

        unset($campos['password2']);
        $campos['password'] = Hash::make($campos['password']);

        Pe::insert($campos);

        //$pes = new Pes();

        //$pes -> coordinador = $request ->get('coordinador');
        //$pes -> correo = $request -> get('correo');
        //$pes -> contraseña = $request -> get('contraseña');
        //$pes -> save();

        return redirect('/pes'); //detalle que me avise "se guardo correctamente"
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
        $pe= Pe::find($id);
        return view('pes.show')->with('pe',$pe);
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

        $campos = $request->all(); 
        if ( $campos['password'] !=  $campos['password2']) 
            return redirect()->back(); //detalle quiero que regrese y no vuelva a escribir y ademas que le avise  "error, no repetiste bien las contraseñas";
        
        if ( $campos['password'] == "") unset( $campos['password']);
        else $campos['password'] = Hash::make($campos['password']);

        $registro = Pe::find($id);
        $registro->fill($campos);
        $registro->save();
        return redirect("/pes"); //detalle avisar que modifico
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
            Pe::destroy($id);
            return redirect('pes')->with('message','Programa educativo eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect('pes');//detalle: que avise que no pudo borrar
        }
    }
}
    

