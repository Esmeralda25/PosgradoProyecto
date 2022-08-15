<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\PeRequest;

use App\Models\Pe;

class PeController extends Controller
{
    public function index(){
        //$this->authorize('listar');
        $pes = Pe::paginate(10);        
        return view('pe.listar',compact('pes'));
    }

    public function create(){
        

        return view('pe.agregar');
    }
    
    public function store(PeRequest $request) 
    {
        $campos = request()->except('_token','password_confirmation');
        $campos['password'] = Hash::make($campos['password']);
        Pe::insert($campos);
        return redirect(route('programas.index'))->with('message','Programa educativo agregado correctamente');    }

    
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
        return view('pe.mostrar')->with('pe',$pe);
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
        return view('pe.editar')->with('pe',$pe);
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeRequest $request, $id)
    {

        $campos = request()->except('_token','password_confirmation');

        if ( $campos['password'] == "") unset( $campos['password']);
        else $campos['password'] = Hash::make($campos['password']);

        $registro = Pe::find($id);
        $registro->fill($campos);
        $registro->save();
        return redirect(route('programas.index'))->with('message','Programa educativo modificado correctamente'); 
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
            return redirect(route('programas.index'))->with('message','Programa educativo eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect(route('programas.index'))->with('message', $th->getMessage());;//detalle: que avise que no pudo borrar
        }
    }
}
    

