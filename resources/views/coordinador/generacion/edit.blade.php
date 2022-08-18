@extends('layouts.master')

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
                        <form action="{{route('generaciones.update',$generacion->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body"> 
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" style="width: 100%" tabindex="2" value="{{$generacion->nombre}}">
                                </div>
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Descripcion</label>
                                    <input id="nombre" name="descripcion" type="text" style="width: 100%" tabindex="2" value="{{$generacion->descripcion}}">
                                </div>
                                <a href="{{route('generaciones.index')}}" class="btn btn-danger">Cancelar</a>
                                <button type="submit" class="btn btn-warning">Guardar</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection