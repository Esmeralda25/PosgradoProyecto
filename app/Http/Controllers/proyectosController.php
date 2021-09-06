<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Adquirido;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Compromiso;
use App\Http\Requests\proyectosRequest;
use Illuminate\Support\Facades\Auth;

class proyectosController extends Controller
{

    public function registrar(){
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 
        return view('estudiante.registrar', compact('estudiante'));

    }
    public function Store(Request $request){
        proyecto::create(request()->all()); //checar esta parte, se crea el proyecto, verificando por que no acepta el metodo post de addproyecto
        return redirect('/estudiantes'); //porque redirige a proyectos deberia redirigir a "estudiantes"
    } 
 
    public function show()
    {
        $estudiante = \Session::get('usuario');
        $estudiante = $estudiante->fresh(); 

        return view('estudiante.seguimineto' , compact('estudiante'));//->with('add',$add);
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