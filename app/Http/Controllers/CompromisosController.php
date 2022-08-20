<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compromiso;
 
class CompromisosController extends Controller
{
    public function index(){
        $coordinador = \Session::get('usuario');
        $compromisos = Compromiso::orderBy('titulo','DESC')->where('pe_id',$coordinador->id)->orWhereNull('pe_id')->get();
        $opciones = Compromiso::select('titulo')->distinct()->paginate(10);//->get();
        return view('coordinador.compromiso.index' , compact('compromisos','opciones') ); 
    }
    public function create(){ 
    }
    
    public function store(Request $request) 
    {
        //guardar los datos que vengan
        $coordinador = \Session::get('usuario');
        $compromiso = new Compromiso;
        $compromiso->fill( $request->all() );
        $compromiso->pe_id=$coordinador->id;
        $compromiso->save();
        return redirect(route('compromisos.index'))->with('message','Compromiso agregado correctamente'); //que me envie con un mensaje
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
        return view('coordinador.compromiso.edit',compact('compromiso'));
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
        return redirect(route('compromisos.index'))->with('message','Compromiso actualizado correctamente');
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
            return redirect(route('compromisos.index'))->with('message','Compromiso eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect(route('compromisos.index'))->with('message','No se pudo eliminar el compromiso, verifique');
            
        }
    }
}
