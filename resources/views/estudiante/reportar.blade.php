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
                            <h1 class="card-title font-weight-bold" style="text-align: center">                                
                            Actividades
                            </h1>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                            <form action="reportar" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="proyecto_id" value="{{$estudiante->proyecto->id}}">
                                <div class="card-header text-center font-weight-bold" style="font-size: 30px">Reportar</div>        
    
                                    <div class="container">
                                        <div>
                                        <!-- espacio entre contenido-->
                                        </div>
                                    
                                        <div>
                                            <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Actividades</h2>
                                        </div>
                                        @forelse ($estudiante->proyecto->actividades( $estudiante->semestreActual->id )->get() as $actividad)
                                            <li>{{$actividad->nombre}} - en el periodo "{{$actividad->periodo}}"</li>
                                        @empty
                                            Sin actividades definidas para este semestre
                                        @endforelse
                                        <div>
                                            <!-- espacio entre contenido-->
                                        </div>
                                        <div>
                                            <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Compromisos Adquiridos</h2>
                                        </div>
                                        <!-- este los file solo deben dejar subir pdf s-->
                                        
                                        <table class="table table-striped col-12">
                                            <thead>
                                                <tr class="table-dark" >
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

                                        
                                        REPORTE: <input type="file" name="reporte">

                                        <div>
                                            <input type="submit"  class="btn btn-danger" value="REPORTAR">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
</section>
@endsection  
   
