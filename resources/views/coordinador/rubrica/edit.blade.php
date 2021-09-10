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
    <a href="/rubricas" class="nav-link">
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Actualizar Rubricas</h1>
                        </div>
                        <form action="/actualizar-rubricas/{{$rubrica->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                            <div class="row form-group col-12">
                            <label for="" class="row col-12">Titulo</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$rubrica->nombre}}">
                            </div>

                            <div class="mb-3 form-group">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo">
                            <option value="Numerica">Numericas</option>
                            <option value="Alfanumerica">Alfanumerica</option>
                            </select>
                            </div>                    
                            <a href="/rubricas" class="btn btn-danger" tabindex="5">Cancelar</a>
                            <button type="submit" class="btn btn-warning" tabindex="4">Guardar</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection