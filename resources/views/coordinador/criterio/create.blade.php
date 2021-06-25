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
@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Crear Criterios</h2>
            <h3 class="card-title font-weight-bold" style="text-align: center">Rubrica</h3><br><br>

<form action="/guardar-criterios" method="POST" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <input name="Rubricas_id" type="hidden" class="form-control" tabindex="2" value="{{$rubrica->id}}">
    </div>
    
    
    <a href="/criterios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
        </div>
    </div>
      
</div>
@endsection