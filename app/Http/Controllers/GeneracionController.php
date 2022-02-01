<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Generacion;
use App\Models\Pe;


  

class GeneracionController extends Controller
{
    public function index(){ 
        
        $pe = \Session::get('usuario');
        $pe= $pe->fresh();
        //echo "entra coordinador: $usuario->nombre con coordinador $usuario->coordinador  ";

        $generaciones = Generacion::where('pes_id', $pe->id)->get();
        return view('coordinador.generacion.index',compact('generaciones',$generaciones));
    
    }

    public function create(){

        $pe = \Session::get('usuario');
        return view('coordinador.generacion.create')->with('pe',$pe);

        
    }
    
    public function store(Request $request) 
    {
        generacion::create(request()->all());
        return redirect('/listar-generaciones')->with('message','Generacion agregada correctamente');
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
        //$this->authorize('generacion',$id);
        $generacion = Generacion::find($id);

        return view('coordinador.generacion.edit')->with('generacion',$generacion); 
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
        $generacion = $request->all();
        $registro = Generacion::find($id);
        $registro->fill($generacion);
        $registro->save();
        return redirect("/listar-generaciones")->with('mensaje','Generacion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    //$this->authorize('generacion',$id);
    {
        try{
            Generacion::destroy($id);
            return redirect('listar-generaciones')->with('borrar','Generacion eliminada correctamente');
        } catch (\Throwable $th) {
            return redirect('listar-generaciones')->with('nborrar','Esta generación no se pudo borrar ya que tiene periodos agregados');
        }
    }
}
    


