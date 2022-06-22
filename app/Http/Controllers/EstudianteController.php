<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use App\Models\Proyecto;
use App\Models\Rubrica;
use App\Models\Evaluacion;
use App\Models\DesgloceEvaluacion;
use Illuminate\Http\Request;


class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $estudiante  = \Session::get('usuario' );
        $estudiante = $estudiante->fresh(); 

        $proyecto = Proyecto::where('estudiante_id', $estudiante->id)->get();
        
        if ($proyecto->count() == 0 )
            $hacer = ["Registrar"];
        else 
            $hacer = [$estudiante->semestreActual->estado];        
        return view('estudiante.index', compact('hacer','proyecto','estudiante'));

    }

    public function create()
    {
        return view('estudiante.create');
    }

    
    public function store(Request $request)
    {
        return redirect('/estudiantes');
    } 

    
    public function show($id){
        $usuario  = \Session::get('usuario' );
        $proyecto = Proyecto::find($id);
        $evaluacion = Evaluacion::where('proyecto_id', $proyecto->id)->get();
        //dd($evaluacion);       
        //dd($proyecto);
        //$proyectos = $usuario->proyectos();
        return view('estudiante.historicoes', compact('proyecto','evaluacion'));
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

    public function estatusAlumno($id){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        $proyecto = estudiante::find($id);
        //$estudiantes = $proyecto->estudiantes;

        
    }
}
