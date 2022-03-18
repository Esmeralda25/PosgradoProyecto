<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Rubrica;
use App\Models\Pe;
use Illuminate\Http\Request;


class RubricaController extends Controller
{
    public function index(){ 
        //$this->authorize('listar');       
        $pe  = \Session::get('usuario' );
        $pe = $pe->fresh();

        $rubricas = Rubrica::where('pe_id', $pe->id)->get();
        return view('coordinador.rubrica.index',compact('rubricas',$rubricas));
    }
 
    public function create(){
       // $this->authorize('create', Rubrica::class);  
        $pe  = \Session::get('usuario' );
        $pe = $pe->fresh();
        return view('coordinador.rubrica.create',compact('pe'));

        
    }
    
    public function store(Request $request) 
    {
        //dd($request->all());
        rubrica::create(request()->all());
        return redirect('/rubricas')->with('message','Rurbica guardada correctamente');
        
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
        //$this->authorize('rub',$id);
        $rubrica= Rubrica::find($id);
        return view('coordinador.rubrica.show')->with('rubrica',$rubrica);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        //$this->authorize('rubrica', $id);
        $rubrica = Rubrica::find($id);
        return view('coordinador.rubrica.edit')->with('rubrica',$rubrica); 
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
        $rubrica = $request->all();
        $registro = Rubrica::find($id);
        $registro->fill($rubrica);
        $registro->save();
        return redirect("/rubricas")->with('mensaje','Rubrica actualizada correctamente');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    //$this->authorize('rub',$id);
    {
        try{
            Rubrica::destroy($id);
            return redirect('rubricas')->with('borrar','Rubrica eliminada correctamente');//detalle: que avise que si borro
        } catch (\Throwable $th) {
            return redirect('rubricas');//detalle: que avise que no pudo borr
            alert("No se pudo borrar");
        }
    }
}
    
