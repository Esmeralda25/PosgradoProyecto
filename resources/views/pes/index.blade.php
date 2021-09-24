@extends('layouts.master')

@section('titulo')
  Informatico

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
                            Programa Educativo
                            </h1>
                        </div>
                        <a style="margin: 10px auto;" href="/pes/create" class="btn btn-primary btn-block">Agregar</a>

                        <table class="table table-dark table-striped mt-6">
                            <thead class="table table-dark table-striped mt-6">
                                <tr>
                                    <th scope="col">Programa</th>
                                    <th scope="col">Coordinador</th>
                                    <th scope="col">acciones</th>
                                <tr>
                            </thead> 
                            
                            <tbody>
                            @foreach($pes as $pe)
                            <tr>
                                <td>{{$pe->nombre}}</td>
                                <td><a href="mailto:{{$pe->correo}}">{{$pe->coordinador}}</a></td>                   
                                <td>
                                    <a href="pes/{{$pe->id}}/edit" class="btn btn-info">EDITAR</a>
                                    <a href="pes/{{$pe->id}}" class="btn btn-warning" style="display:inline">MOSTAR</a>
                                    <form action="pes/{{$pe->id}}" style="display:inline" method="post" >
                                        @csrf
                                        @method('delete')
                                        
                                        <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
        
            </div>
    
        </div>
    </div>
</section>


@endsection