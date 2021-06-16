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
            <h2>Actualizar Rubrica</h2>
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

                                    
            <a href="/rubricas" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            
</form>
        </div>
    </div>
      
</div>




@endsection