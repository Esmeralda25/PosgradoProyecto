<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;


class estudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = estudiante::all();
        

        return view('estudiante.index') ->with('estudiantes',$estudiantes);
    }

    public function create()
    {
        return view('estudiante.create');
    }

    
    public function store(Request $request)
    {
        return redirect('/estudiantes');
    }

    
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
        $estudiante= estudiante::find($id);
        return view('estudiante.edit')->with('estudiante',$estudiante);
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
        $registro = estudiante::find($id);

        $registro->fill($valores);

        $registro->save();
        return redirect("/estudiantes");
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
