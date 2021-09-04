@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Asignar Proyecto</h1>
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
                                        
                                                    <th scope="col">{{$proyecto->estudiante->nombre}}</th>
                                                    <th scope="col">
                                                        @if (is_null($proyecto->comite))
                                                            No asignado

                                                            <th>
                                                    
                                                    <div class="btn-group" style="padding-rigth: 12px">
                                                            <buttom class="btn btn-danger" style="padding-rigth: 12px"> <a href="/asignar-asesores/{{$proyecto->id}}" style="color: black">ASIGNAR</a></buttom>
                                                        </div> 
                                                    </th>
                                                        @else
                                                            {{$proyecto->comiteTutorial->docenteAsesor->nombre}}
                                                        @endif
                                                        
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
@endsection


