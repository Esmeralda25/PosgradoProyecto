<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Adquirido;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Compromiso;
use App\Models\Periodo;

use App\Http\Requests\proyectosRequest;
use Illuminate\Support\Facades\Auth;

class proyectosController extends Controller
{

    public function listarProyectos(){
        $usuario  = \Session::get('usuario' );
        $usuario = $usuario->fresh(); 
        $proyectos = $usuario->proyectos;
        return view('coordinador.proyectos.listar-proyectos',compact('proyectos')); //deberia de ser la sub carpeta proyectos y asi poner en sub carpetas usuarios rubricas, compromisos y generaciones


    }

    public function registrar(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        return view('estudiante.registrar', compact('estudiante'));

    }
    public function store(Request $request){
        proyecto::create(request()->all()); 
        return redirect('/estudiantes'); //error al redireccionar, manda estado del estudiante nulo
    } 
 
    public function show()
    {
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 

        return view('estudiante.seguimineto' , compact('estudiante'));//y creo que deberia de enviar el proyecto no el estudiante.
    }


    public function edit(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        $compromisos = Compromiso::where('pes_id', $estudiante->pe->id) ->orWhereNull('pes_id')->get();
        return view('estudiante.comprometerse', compact('estudiante','compromisos'));
    }
    

    public function update(Request $request){
        $nuevo = new Adquirido();
        $nuevo->fill($request->all());
        $nuevo->save();
        return redirect('/comprometerse');
    }

    public function reportar(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        return view('estudiante.reportar' , compact('estudiante'));//y creo que deberia de enviar el proyecto no el estudiante.
    }







public function index(){
    $usuario = \Session::get('usuario');
    $usuario = $usuario->fresh(); 

//    echo "entra estudiante: $usuario->id";
//para que cargar los compromisos, esto solo deberia ser en comprometerse (actualizar)
//    $compromisos = Compromiso::all(); //deben ser los compromisos que admite solo su p.e.S 

    //checar en que moemnto estamos
    //si tiene proyecto lo muestro si no que lo cree
    return view('estudiante.proyectos', compact('compromisos'));

}
    

    public function asignarComite($id_proyecto){
        $pe = \Session::get('usuario');
        $pe = $pe->fresh(); 
        $proyecto = proyecto::find($id_proyecto);
        $docentes = $pe->docentes;
        return view('coordinador.proyectos.asignar-comite',compact('proyecto','docentes')); //la convencion dice que las vistas son en plural pero a un proyecto no se le asignan varios comites
    }

    public function actualizarCompromisos(Request $request, $id){
        //dd($request->all());
        //manejo de transacciones en base de datos
        //DB::beginTransaction()
        //validaciones       
        $compromiso = new Compromiso;
        $compromiso->fill($request->all());
        $compromiso->save();
        $proyecto = Proyecto::find($id);
        $proyecto->compromiso = $compromiso->id;
        $proyecto->save();
        return redirect("/estudiantes");
    }

    public function destroy($id)
    {
        try{
            Adquirido::destroy($id);
            return redirect('comprometerse')->with('borrar','Generacion eliminada correctamente');
        } catch (\Throwable $th) {
            return redirect('comprometerse');//detalle: que avise por que no pudo borrar
            alert("No se pudo borrar");
        }
    }


}