@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')
<div class="mmt-10 align-content-center">
    <section class="content">
    <a href="/coordinadores" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>
        <div class="container-fluid">
            <div style="height: 5px">
            </div>  <!-- Info boxes -->
            <div class="row" >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Asignar Proyecto</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                                    <div class="row">
                                            
                                    
                                    <table class="table table-dark table-striped mt-4">
                                            <thead >
                                                
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Proyecto</th>
                                                    <th scope="col">Estudiante</th>
                                                    <th scope="col">Asesor</th>
                                                    <th scope="col">Acciones</th>
                                                
                                                <tr>
                                            </thead>
                                            <tbody>
                                            @foreach($proyectos as $proyecto)
                                            <tr>
                                            
                                                    <th scope="col">{{$proyecto->id}}</th>
                                                    <th scope="col">{{$proyecto->titulo}}</th>
                                        
                                                    <th scope="col">holaaa</th>
                                                    <th scope="col">holaaa</th>
                                                    
                                                    <th>
                                                    
                                                    <div class="btn-group" style="padding-rigth: 12px">
                                                            <buttom class="btn btn-danger" style="padding-rigth: 12px"> <a href="/asignar-asesores/{{$proyecto->id}}" style="color: black">ASIGNAR</a></buttom>
                                                        </div> 
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
    
@endsection


