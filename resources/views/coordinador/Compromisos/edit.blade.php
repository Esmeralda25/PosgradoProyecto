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
            <h2>Editar Compromisos</h2>
            
            <form action="/actualizarCompromisos/{{$compromiso->id}}"​​ method="post">
                    @csrf
                    @method('PUT')
                <div class="card-body">
                    <div class="row form-group col-12">
                        <label for="" class="row col-12">Compromiso</label>
                        <input id="titulo" name="titulo" type="text" class="form-control" tabindex="2" value="{{$compromiso->titulo}}">
                    </div>

                        <a href="/Compromisos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        <!--<input type="submit" class="btn btn-primary" value="Agregar">-->

                </div>
            </form>
        </div>
    </div>
      
</div>   
@endsection
