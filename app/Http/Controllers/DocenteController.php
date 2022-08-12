<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Adscripcion;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 


use Illuminate\Http\Request;

use App\Http\Requests\DocenteRequest;

class DocenteController extends Controller
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

//        dd(Docente::whereIn('id',Adscripcion::where('pe_id',$coordinador->id)->select('id'))->toSql() );

        $usuarios =  Docente::whereIn('id',Adscripcion::where('pe_id',$coordinador->id)->select('docente_id'))->paginate(8);
//        dd($usuarios);

/*
        $usuarios =  DB::table('docentes')
        ->select('nombre','id', DB::raw("'Docente' as nivel") )
        ->whereIn('id', DB::table('adscripciones')->select('docentes_id')->where('pe_id',$coordinador->id) )
        ->paginate(8);
*/
        // "SELECT nombre FROM docentes where id in (select docentes_id where pes_id = 5 )"
        // 
        return view('docente.listar')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocenteRequest $request)
    {
        $pe = \Session::get('usuario');
        $campos = request()->except('_token','password_confirmation');
        //dd($datos);
        $campos['password'] = Hash::make($campos['password']);
        
        //Docente::insert($datos);
        $nuevo = new Docente();
        $nuevo->fill($campos);
        $nuevo->save();
        //modificar la adscripcion  a $pe->id del $nuevo->id
        $add = new Adscripcion();
        $add->pe_id = $pe->id;
        $add->docente_id = $nuevo->id; 
        $add->save();

        return redirect(route('docentes.index'))->with('message','Usuario agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        dd($docente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        return view('docente.editar')->with('docente',$docente);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(DocenteRequest $request, Docente $docente)
    {
        $campos = request()->except('_token');
        if ( $campos['password'] == "") unset( $campos['password']);
        else $campos['password'] = Hash::make($campos['password']);
        $docente->fill($campos);
        $docente->save();
        return redirect(route('docentes.index'))->with('message','Usuario actualizado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        try{
            Adscripcion::where('docente_id', $docente->id)->delete(); //deberia ser docente_id por ser llave foranea
            $docente->delete();

            return redirect(route('docentes.index'))->with('message','Docente eliminado correctamente');
            
        } catch (\Throwable $th) {
            return redirect(route('docentes.index'))->with('message','No se pudo eliminar al docente ya que pertenece a un comite tutorial de un proyecto activo');
            
        }
}
}
