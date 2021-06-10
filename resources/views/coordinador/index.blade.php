@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div style="height: 50px">
        </div>  <!-- Info boxes -->  
  
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center">
                        {{ \Session::get('usuario')->nombre}}<br>
                        {{ \Session::get('usuario')->coordinador}}
                        </h5>
    
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>

                            <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-wrench"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a class="dropdown-divider"></a>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>
                            
                                            <div class="info-box-content">
                                                <a href="{{url('/usuarios')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Usuarios</span></a>  
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/generaciones')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Generaciones</span></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/asignaciones')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Proyectos</span></a>
                                            
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/rubricas')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Rubricas</span></a>
                                                
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tasks"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/addcompromisos')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Compromisos</span></a>
                                                
                                            </div>
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
  <!-- Content Wrapper. Contains page content -->



    
          
    
        
  