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
            <i class="fas fa-users nav-icon"></i>    
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
                        <!-- contenido de main imagenes -->
                                <div class="row">
                                @foreach($estudiantes as $estudiante)
                                    <div class="col-6">
                                    @if($estudiante->cursando == "registro")
                                        <div class="info-box" style="visibility: TRUE;">
                                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>
                            
                                            <div class="info-box-content">
                                                <a href="{{url('/proyectos')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Nuevo Proyecto</span></a>  
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    @endif
                                    </div>
                                    <div class="col-6">
                                    @if($estudiante->cursando == "inicio")

                                        <div class="info-box" style="visibility: TRUE;">
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/mainestudiantes')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Modificar Proyecto</span></a>
                                                
                                            </div>
                                        </div>
                                    @endif    
                                    </div>
                                    <div class="col-6">
                                    @if($estudiante->cursando == "seguimiento")

                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/reportes')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Reportar Avance</span></a>
                                            
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    @endif    
                                    </div>
                                    <div class="col-6">
                                    @if($estudiante->cursando == "reportar")

                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/compromisos')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Compromisos</span></a>
                                                
                                            </div>
                                            <!-- /.info-box-content -->
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
    </div>
</section>
@endsection
  

