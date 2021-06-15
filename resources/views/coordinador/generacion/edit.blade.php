@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/coordinadores')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Agregar generacion</h2>
                                    <form action="/actualizarGeneraciones/{{$generacion->id}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                     <div class="row form-group col-12">
                                    <label for="" class="row col-12">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$generacion->nombre}}">
                                    </div>

    
                                    <div class="row form-group col-12">
                                    <label for="" class="row col-12">Descripcion</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$generacion->descripcion}}">
                                    </div>

                                    
                                    <a href="/coordinador" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            
</form>
        </div>
    </div>
      
</div>




@endsection