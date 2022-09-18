<?php

namespace App\Http\Controllers;
use App\Models\Docente;
use App\Models\Adscripcion;
use App\Models\Pe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 
use App\Http\Requests\DocenteRequest;

use Illuminate\Http\Request;

class AdscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinador = \Session::get('usuario');
        $coordinador = $coordinador->fresh();

        $adscripciones=Docente::whereNotIn('id',Adscripcion::where('pe_id',$coordinador->id)->select('docente_id'))->paginate(8);
        return view('docente.adscripcion')->with('adscripciones',$adscripciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $pe = \Session::get('usuario');
        //modificar la adscripcion  a $pe->id del $nuevo->id
        $add = new Adscripcion();
        $add->pe_id = $pe->id;
        //$docente =  Docente::where('id', $request->id)->get('id');
        $add->docente_id = $request->id;
        
          
        $add->save();

        return redirect(route('docentes.index'))->with('message','Usuario agregado correctamente');
    }

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
        //
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
        //
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
