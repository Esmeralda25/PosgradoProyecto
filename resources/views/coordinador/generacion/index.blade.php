@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/coordinador')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
                 <section class="content">
            <div class="container-fluid">
                <div style="height: 50px">
                </div>  <!-- Info boxes -->
                
                    
        
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="text-align: center">
                                <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Generaciones</h5>
            
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
                                        <div class="container">
                                            <a style="margin: 10px auto;" href="{{url('/generacion/create')}}" class="btn btn-primary">Agregar</a>
                                    
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                            
                                                    <tr>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Descripcion</th>
                                                        <th scope="col">Acciones</th>
                                                    <tr>
                                                </thead>
                                                        <th></th>
                                                        <th></th>
                                                        <th>
                                                        <button type="button" class="btn btn-success">Editar</button>
                                                        <button type="button" class="btn btn-warning"><a href="{{url('/periodo')}}" style="color: white">Periodos</a></button>
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                        </th>
                                                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                    
                                    
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
    </div>
      
</div>

    
@endsection

