<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Actividad;


class ActividadController extends Controller
{
    public function index()
    {
        //PLANTILLA DONDE EL ESTUDIANTE AGREGA PROYECTO
        return view('estudiante.compromisosadquiridos');//->with('add',$add);
    }

    public function agendar(Request $request){
        //update de adquirido (compromiso adquirido) y el update de actividad
            $rules = [
                'nombre'=>'required',
                'etapa'=>'required'
            ];
            $messages = [
                'nombre.required' => 'No puedes dejar el nombre de la actividad vacio',
                'etapa.required' => '¿Cúando se llevara a cabo esta actividad?'
            ];

            $validator = Validator::make($request->all(),$rules, $messages);
    
            if($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator, "actividades");
            } else {
                $nuevop = new Actividad();
                $nuevop->fill($request->all());
                $nuevop->save();
                return redirect( route('proyectos.comprometerse' ))
                    ->with('message','Es momento de decidir como alcanzar el objetivo')
                    ->with('mensaje_actividad','Se agregó actividad correctamente.') ;
            }
            
            $this->validate($request, $rules, $messages);

        
    }
    public function destroy($id)
    { 
        try{
            Actividad::destroy($id);
            return redirect( route('proyectos.comprometerse' ))
                ->with('message','Es momento de decidir como alcanzar el objetivo')
                ->with('mensaje_actividad','Se elimino la actividad correctamente.') ;
        } catch (\Throwable $th) {
            return redirect( route('proyectos.comprometerse' ))
                ->with('message','Es momento de decidir como alcanzar el objetivo')
                ->with('mensaje_actividad','Error no esperado: ' . $th->getMessage() ) ;
        }
    } 
    
}
