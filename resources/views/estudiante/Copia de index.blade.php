@extends('layouts.master')

@section('titulo')
  <p>Estudiante: {{ \Session::get('usuario')->nombre}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="{{route('entrada.salida')}}">
        <li class="nav-item"> 
            @csrf
            <a href="{{route('entrada.salida')}}" class="nav-link"> 
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
                            Estudiante: {{ \Session::get('usuario')->nombre}}
                            </h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-6" href="/estudiante/etapa1">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>                   
                                                    <div class="info-box-content">
                                                        <a href="{{url('/proyectos')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Nuevo Proyecto</span></a>  
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                            
                                        </div>
                                        <div class="col-6" href="/estudiante/etapa2">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                                    <div class="info-box-content">
                                                        <a href="{{url('/mainestudiantes')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Modificar Proyecto</span></a>
                                                        
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-6" href="/estudiante/etapa3">

                                                <div class="info-box mb-3">
                                                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                                    
                                                    <div class="info-box-content">
                                                    <a href="{{url('/reportes')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Reportar Avance</span></a>
                                                    
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                        </div>
                                        <div class="col-6" href="/estudiante/etapa4">

                                                <div class="info-box mb-3">
                                                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                                    
                                                    <div class="info-box-content">
                                                    <a href="{{url('/compromisos')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Historico</span></a>
                                                        
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                        </div>
                                        <div class="col-6" href="/estudiante/etapa5">

                                                <div class="info-box mb-3">
                                                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                                        
                                                    <div class="info-box-content">
                                                        <a href="{{url('/compromisos')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Compromisos</span></a>
                                                            
                                                    </div>
                                                </div>
                                        </div>
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
  

