<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Compromiso;
use App\Http\Requests\proyectosRequest;
use Illuminate\Support\Facades\Auth;

class proyectosController extends Controller
{
 
public function index(){


    $usuario = \Session::get('usuario');
//    echo "entra estudiante: $usuario->id";
    $compromisos = Compromiso::all(); //deben ser los compromisos que admite solo su p.e.
    //checar en que moemnto estamos
    //si tiene proyecto lo muestro si no que lo cree

    return view('estudiante.proyectos', compact('compromisos'));

}
    

    public function Store(Request $request){
        
        proyecto::create(request()->all());
        return redirect('/proyectos');
        

    } 
    public function asignarAsesores($id_proyecto){
        $pe = \Session::get('usuario');

        

        
        $proyecto = proyecto::find($id_proyecto);
        $docentes = $pe->docentes;
        
        return view('coordinador.asignarProyecto.asesor',compact('proyecto','docentes'));
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
}