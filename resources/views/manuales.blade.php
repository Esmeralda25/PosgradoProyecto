@extends('layouts.master')

@section('content') 
  
<div class="mt-10 align-content-center"> 
    <section class="content">
        <div class="container-fluid">
        <a href="/" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>

            <div style="height: 5px">
            </div>  <!-- Info boxes -->
            <div class="row" >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center">
                            <h5 class="card-title font-weight-bold justify-content-center" style="text-align: center; font-size:30px"> Manuales de Usuario</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                            <div class="row">
                                    <div class="col-6">
                                        <div class="info-box">
                                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-tie"></i></span>
                                            <div class="info-box-content">
                                            <a href="{{url('/')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Informático</span></a>
                                            </div>
                                            <!-- /.info-box-content -->

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box">
                                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-tie"></i></span>
                                            <div class="info-box-content">
                                            <a href="{{url('/')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Coordinador</span></a>
                                            </div>
                                            <!-- /.info-box-content -->

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-tie"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Docente</span></a>
                                            
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-tie"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Estudiante</span></a>
                                            </div>

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
</div>
@endsection
