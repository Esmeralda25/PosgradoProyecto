@extends('layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid ">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center " >
            <div class="col-10">
                <div class="card col-12">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12">
                        <!-- contenido de main imagenes -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{route('docentes.index')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Docentes</span></a>  
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                                            <div class="info-box-content">
                                            <a href="{{route('rubricas.index')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Rubricas</span></a>
                                            </div>
                                            <!-- /.info-box-content -->

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                            <div class="info-box-content">
                                                @if ($pe->rubricas->count()==0)
                                                    <span class="info-box-text font-weight-bold" style="color: aliceblue;">Generaciones</span> DEBE DE AGREGAR RUBRICAS
                                                @else
                                                    <a href="{{route('generaciones.index')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Generaciones</span></a>
                                                    
                                                @endif
    
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tasks"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{route('compromisos.index')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Compromisos</span></a>
                                                
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/listar-proyectos')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Proyectos (asignar comite)</span></a>
                                            
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>

                                    <!-- liga para descargar manuales -->
                                   
                                    
                                            <!-- /.info-box-content -->
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
  <!-- Content Wrapºr. Contains page content -->



    
          
    
        
  