@extends('layouts.master')

@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('inicio')}}" class="nav-link" >Inicio</a>
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
                    <form action="{{route('criterios.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Descripcion</label>
                            <input name="descripcion" type="text" style="width: 100%" value="{{old('descripcion')}}">
                        </div>
                        <div class="mb-3">
                            <input name="rubrica_id" type="hidden" value="{{$rubrica->id}}">
                        </div>
                        <a href="{{route('criterios.index',$rubrica->id)}}" class="btn btn-danger">Cancelar</a>
                        <input type="submit" class="btn btn-warning" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection