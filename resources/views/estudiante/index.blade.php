@extends('layouts.master')

@section('titulo')
  <p>Estudiante: {{ \Session::get('usuario')->nombre}}</p>

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
                            Estudiante: {{ \Session::get('usuario')->nombre}}
                            </h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    @if (in_array("Registrar",$hacer) )
                                    {{--Crear el proyecto --}}
                                    
                                    <div class="col-6" href="/estudiante/etapa1">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>                   
                                            <div class="info-box-content">
                                                <a href="{{url('/registrar')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Nuevo Proyecto</span></a>  
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>                                    
                                    </div>                            
                                    @endif


                                    @if ( in_array("Comprometerse",$hacer)   )
                                    {{--Adquirir compromisos  --}}

                                    <div class="col-6" href="/estudiante/etapa2">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/comprometerse')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Modificar Proyecto</span></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endif


                                    @if (in_array("Reportar",$hacer) )
                                    @if (session('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('message')}}
                                        </div> 
                                     @endif
                                    <br><br><div class="col-6" href="/estudiante/etapa3">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/reportar')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Reportar Avance</span></a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    @endif

                                    @if ( in_array("Inicio",$hacer) || in_array("Seguimiento",$hacer) || in_array("Evaluacion",$hacer )  )
                                     {{--Ya tengo proyecto, ya dije que es lo que voy a hacer (adquiri compromisos) ahora es tiempo de trabajar en ellos y se puede solo
                                        ver que es mi proyecto y que compromisos tengo  --}}
                                        @if (session('registro'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('registro')}}
                                        </div> 
                                     @endif
                                    <div class="col-6" href="/estudiante/etapa4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                                            <div class="info-box-content">
                                            <a href="{{url('/seguimiento')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Seguimiento</span></a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    @endif

                                    
                                    @if (in_array("Concluido",$hacer) )
                                    <div class="col-6">
                                        
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                                            <div class="info-box-content">
                                            <a href="mostrar-calificacionesEs/{{$estudiante->id}}" style="color: white"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Historico</span></a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    @endif

                                    
                                </div>
                            </div>
                        </div>

                
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
@endsection
  

