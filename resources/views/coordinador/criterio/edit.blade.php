@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

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
<div class="main container mt-10">
    <div class="row justify-content-center"> 
        <div class="col-md-10">
            <h2>Agregar generacion</h2>
                <form action="/actualizar-criterios/{{$criterio->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body"> 
                        <div class="row form-group col-12">
                            <label for="" class="row col-12">Descripcion</label>
                            <input name="descripcion" type="text" class="form-control" tabindex="2" value="{{$criterio->descripcion}}">
                        </div>

                        <a href="/criterios" class="btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                    </div>
                </form>
        </div>
    </div>
      
</div>
@endsection