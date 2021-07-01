@extends('layouts.master')

@section('titulo')
  <p>Docente</p>

@endsection
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
                            <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">
                                Docente: {{ \Session::get('usuario')->nombre}}
                            </h5>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                
                                    <div class="col-md-12">
                                <!-- contenido de main imagenes -->
                                        <div class="row">
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                                    
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Proyecto</th>
                                                        <th scope="col">Estudiante</th>
                                                        <th scope="col">Acciones</th>
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                @foreach($proyectos as $proyecto) 
                                                <tr> 
                                            
                                                    <th scope="col">{{$proyecto->id}}</th>
                                                    <th scope="col">{{$proyecto->titulo}}</th>
                                                    <th scope="col">{{$proyecto->estudiante_id}}</th>

                                                    <td>
                                                    <a href="" class="btn btn-info">Evaluar</a>
                                                     <button type="button" class="btn btn-warning"><a href="" style="color: white">Historico</a></button>
                                                     
                                                    </td>
                                                        </th>
                                                        <tr> 
                                                @endforeach
                                            

                                                  
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

