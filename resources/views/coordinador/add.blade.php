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
<div class="mmt-10 align-content-center">
  <section class="content">
    <div class="container-fluid">
          <!-- Info boxes -->
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Usuario</h5>
    
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
                                    <a href="{{url('coordinador/create')}}" class="btn btn-primary">Agregar</a>
                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Nivel</th>
                                                <th scope="col">Acciones</th>
                                            <tr> 
                                        </thead>
                                     {{-- prueba 1 de commit and push --}}
                                
                                        <tbody>
                                        
                                            <tr>
                                                <td>Keyla</td>
                                                <td>Docente</td>
                                            
                                                <td> 
                                                 <!-- <a href={{url('/estudiante/{​​{​​$estudiante->id}​​}​​/edit')}} class="btn btn-info">Editar</a> -->
                                                    <button><a href={{url('/coordinador/{​​{​​$docente->id}​​}​​/edit')}} class="btn btn-info">Editar</a></button>
                                                    <button class="btn btn-danger">Eliminar</button>
                                                    <button><a class="btn btn-info">Mostrar</a></button>
                            
                                                </td>
                                            </tr>
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
    
@endsection




    
          
    
        
 