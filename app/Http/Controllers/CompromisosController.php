<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compromiso;
 
class CompromisosController extends Controller
{
    public function index(){
        $coordinador = \Session::get('usuario');
        $compromisos = Compromiso::orderBy('titulo','DESC')->where('pes_id',$coordinador->id)->orWhereNull('pes_id')->get();
        $opciones = Compromiso::select('titulo')->distinct()->paginate(10);//->get();
        return view('coordinador.Compromisos.index' , compact('compromisos','opciones') ); 
    }
    public function create(){ 
        $tipos = Compromiso::select('titulo')->distinct()->get();
        //return view('coordinador.Compromisos.create');
    }
    
    public function store(Request $request) 
    {
        //guardar los datos que vengan
        $coordinador = \Session::get('usuario');

        $compromiso = new Compromiso;
        $compromiso->fill( $request->all() );
        $compromiso->pes_id=$coordinador->id;
        $compromiso->save();
        return redirect("/Compromisos")->with('message','Compromiso agregado correctamente'); //que me envie con un mensaje

        
       
        

        //return redirect('/pes');
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
        //$this->authorize('compro', $id);
       $compromiso = Compromiso::find($id);
        return view('coordinador.Compromisos.edit')->with('compromiso',$compromiso);
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
       
        $compromiso = $request->all();
        $registro = Compromiso::find($id);
        $registro->fill($compromiso);
        $registro->save();
        return redirect("/Compromisos")->with('mensaje','Compromiso actualizado correctamente');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$this->authorize('rubrica', $id);
        try{
            Compromiso::destroy($id);
            return redirect('Compromisos')->with('borrar','Compromiso eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect('Compromisos')->with('nborrar','No se pudo eliminar el compromiso, verifique');
            
        }
    }
}
