@extends('layouts.master')

@section('regresar') 
    <a href="/rubricas" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('coordinadores')}}" class="nav-link" >Inicio</a>
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
                            <h3 class="card-title font-weight-bold" style="text-align: center">Crear Criterio en la rubrica: {{$rubrica->nombre}}</h3><br>
                        </div>
                        <form action="/guardar-criterios" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Descripcion</label>
                                <input name="descripcion" type="text" class="form-control" tabindex="2">
                            </div>
                            <div class="mb-3">
                                <input name="rubrica_id" type="hidden" class="form-control" tabindex="2" value="{{$rubrica->id}}">
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