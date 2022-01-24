@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('regresar') 
    <a href="/generaciones" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link" >Inicio</a>
</li>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Generacion</h1>
                        </div>
                        <form action="/actualizar-generaciones/{{$generacion->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body"> 
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$generacion->nombre}}">
                                </div>

            
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Descripcion</label>
                                    <input id="nombre" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$generacion->descripcion}}">
                                </div>
                                <a href="/generaciones" class="btn btn-danger" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-warning" tabindex="4">Guardar</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection