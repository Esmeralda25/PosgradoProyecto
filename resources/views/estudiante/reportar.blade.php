@extends('layouts.master')

@section('titulo')
  <p>Docente: {{ \Session::get('usuario')->nombre}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('regresar') 
    <a href="/estudiantes" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center; font-size: 20px;">                                
                            Reportar Avance
                            </h1>
                        </div>
                            <!-- /.card-header -->
                    <div class="card-body">

                        <!-- TABLA DE ACTIVIDADES ADQUIRIDOS style="margin-right: 5px; margin-left:4px"-->  
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="row col-12" style="text-align: center;">
                                            <th class="col-12" style="font-size: 25px;">
                                                Actividades Adquiridas
                                            </th>
                                    </tr> 
                                </thead>  
                                <tbody>
                                    <tr>
                                        <th>
                                            @forelse ($estudiante->proyecto->actividades( $estudiante->semestreActual->id )->get() as $actividad)
                                                <li>{{$actividad->nombre}} - en el periodo:  "{{$actividad->periodo}}"</li>
                                            @empty
                                                Sin actividades definidas para este semestre
                                            @endforelse
                                        </th>
                                    </tr>
                                                                
                                </tbody>        
                            </table> 
                            <div style="height:15px;"></div>   
                            <table class="table table-dark table-striped">
                            <thead>
                                    <tr class="row col-12" style="text-align: center;">
                                            <th class="col-12" style="font-size: 25px;">
                                                Compromisos Adquiridos
                                            </th>
                                    </tr> 
                                </thead>
                            </table>    
                            <!-- TABLA DE COMPROMISOS ADQUIRIDOS -->  
                            <form action="reportar" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="col-12" >
                                        <th scope="col">Compromisos</th>
                                        <th scope="col">Programado</th>
                                        <th scope="col">Realizado</th>
                                        <th scope="col">Evidencias</th>
                                    </tr>
                                </thead>
                                 
                                <tbody>
                                    @forelse ($estudiante->proyecto->compromisos( $estudiante->semestreActual->id )->get() as $compromiso)
                                    <tr>
                                        <input type="hidden" name="cual[{{$loop->iteration}}]" value="{{$compromiso->id}}">
                                            <th>{{$compromiso->que}}</th>
                                            <td>{{$compromiso->cuantos_prog}}</td>

                                            <td><input type="number" name="logrados[{{$loop->iteration}}]" class="form-control" value="{{$compromiso->cuantos_cumplidos}}"
                                                                    min="1" max="{{$compromiso->cuantos_prog}}"></td>
                                            <td style="padding: 5px">
                                                @if (!is_null($compromiso->evidencia))
                                                    {{$compromiso->evidencia->archivo}}     
                                                @else 
                                                    SIN EVIDENCIA                                                                                          
                                                @endif
<BR>
                                                <input type="file" name="evidencia[{{$loop->iteration}}]" > 
                                            </td> 
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">Sin compromisos definidos para este semestre</td>
                                    </tr>
                                    @endforelse
                                </tbody>        
                            </table>
                            <div style="height:15px;"></div>   
                                <div>
                                    @if ($estudiante->proyecto->reporte( $estudiante->semestreActual->id )->count() != 0)

                                    {{$estudiante->proyecto->reporte( $estudiante->semestreActual->id )->get()[0]->reporte }}     
                                @else 
                                    SIN REPORTE                                                                                          
                                @endif

                                    
                                    REPORTE: <input type="file" name="reporte">
                                </div>
                                <div>

                                    <input type="submit"  class="btn btn-danger" value="REPORTAR">

                                </div>
                            <div>
                            </div>
                            <div style="height:15px;"></div>   
                        </form>            
                    </div>        
                </div>
            </div>
        </div>
    </div>
</section>
@endsection  
   
