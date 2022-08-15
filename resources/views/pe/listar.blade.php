@extends('layouts.master')

@section('titulo')
  Informatico

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="{{route('entrada.salida')}}">
        <li class="nav-item"> 
            @csrf
            <a href="{{route('entrada.salida')}}" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
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
                            @if (session('message'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>{{Session::get('message')}}</strong> 
                                </div> 
                            @endif
                        </div>
                        <a style="margin: 10px auto;" href="{{route('programas.create')}}" class="btn btn-primary btn-block">Agregar</a>

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
                                    <a href="{{route('programas.edit',$pe->id)}}" class="btn btn-info">EDITAR</a>
                                    <a href="{{route('programas.show',$pe->id)}}" class="btn btn-warning" style="display:inline">MOSTAR</a>
                                    <form action="{{route('programas.destroy',$pe->id)}}" style="display:inline" method="post" >
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <br>
                        {{ $pes->links() }}
                </div>
        
            </div>
    
        </div>
    </div>
</section>


@endsection