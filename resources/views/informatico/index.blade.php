@extends('layouts.master')

@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link active far fa-circle nav-icon">Cerrar Sesión</a>
        </li>    
    </form>
    
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
                                    <table class="table table-light table-striped mt-4">
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
                                                    
                                                    <a href='/estudiantes/{​​{​​$estudiante->id}​​}​​/edit' class="btn btn-info">Editar</a>
                                                    <button class="btn btn-danger">Eliminar</button>
                                                    <a class="btn btn-info">Mostrar</a>
                            
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

<a style="margin: 10px auto;" href="pes/create" class="btn btn-primary">Agregar</a>

<table class="table table-light table-striped mt-4">
    <thead class="table table-dark table-striped mt-4">
        <p style="font-size: 35px; text-align:center; margin:0 auto;">AGREGAR PROGRAMA EDUCATIVO</p>
        <tr>
            <th scope="col">Programa</th>
            <th scope="col">Coordinador</th>
            <th scope="col">Acciones</th>
        <tr>
    </thead>
        <!--<tr>
            <th scope="col">Programa 1</th>
            <th scope="col">Ing. Keyla Esmeralda Montejo</th>
            <th scope="col"><buttom class="btn btn-info">Editar</buttom>
            <div class="btn-group">
            <buttom class="btn btn-danger">Borrar</buttom>
            </div>  
            <div class="btn-group">
            <buttom class="btn btn-primary">Agregar</buttom>
            </div>     
            </th>
            
        <tr>
        <tr>
            <th scope="col">Programa 2</th>
            <th scope="col">Ing. Cesar Gabriel Morales</th>
            <th scope="col"><buttom class="btn btn-info">Editar</buttom>
            <div class="btn-group">
            <buttom class="btn btn-danger">Borrar</buttom>
            </div>  
            <div class="btn-group">
            <buttom class="btn btn-primary">Agregar</buttom>
            </div>     
            </th>
            
        <tr>
        -->
    <tbody>
    @foreach($pes as $pe)
    <tr>
        <td> {{$pe->nombre}} </td>
        <td> {{$pe->coordinador}} </td>

        
        <td> 
            
            <a href='/pes/{​​{​​$pe->id}​​}​​/edit' class="btn btn-info">Editar</a>
            <button class="btn btn-danger">Eliminar</button>
            <a class="btn btn-info">Mostrar</a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection