@extends('layouts.master')

@section('titulo')
  <p>Estudiante</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i class="fas fa-users nav-icon"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/estudiantes')}}" class="nav-link">Inicio</a>
</li>
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
                                Seguimiento                         
                            </h1>
                        </div>
                            <form action="" method="POST">        
                                    <div class="container">
                                        <div class="card-body">
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Titulo</label>
                                                {{$estudiante->proyecto->titulo}}
                                            </div>
            
                    
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Hipotesis</label>
                                                {{$estudiante->proyecto->hipotesis}}
                                            </div>
            
                
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Objetivo General</label>
                                                {{$estudiante->proyecto->objetivos}}

                                            </div>
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Objetivo Especifico</label>
                                                {{$estudiante->proyecto->objetivose}}
                                            </div>
                                        <div>
                                        <!-- espacio entre contenido-->
                                        </div>
                                        <div>
                                            <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Compromisos</h2>
                                        </div>
                                        @forelse ($estudiante->proyecto->compromisos( $estudiante->semestreActual->id )->get() as $compromiso)
                                            <li>{{$compromiso->que}}</li>
                                        @empty
                                            Sin compromisos definidos para este semestre
                                        @endforelse
                                        <div>
                                            <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Actividades</h2>
                                        </div>
                                        @forelse ($estudiante->proyecto->actividades( $estudiante->semestreActual->id )->get() as $actividad)
                                            <li>{{$actividad->nombre}}</li>
                                        @empty
                                            Sin actividades definidas para este semestre
                                        @endforelse

{{--
                                        <div>
                                            <button class="btn btn-danger"><a href="{{url('/compromisos')}}" onclick="alerta()" style="color: black">Aceptar</a></button>
                                        </div>
--}}                                    
        
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
    
  