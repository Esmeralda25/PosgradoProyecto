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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Actualizar Rubricas</h1>
                        </div>
                        <form action="{{route('rubricas.update',$rubrica->id)}}}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Titulo</label>
                                    <input id="nombre" name="nombre" type="text" style="width: 100%" value="{{$rubrica->nombre}}">
                                </div>
                                <div class="mb-3 form-group">
                                    <label for="tipo">Tipo</label>
                                    <select name="tipo" id="tipo">
                                        <option value="Numerica">Numericas</option>
                                        <option value="Alfanumerica">Alfanumerica</option>
                                        <option value="{{$rubrica->tipo}}">{{$rubrica->tipo}}</option>
                                    </select>
                                </div>  
                            </div>                  
                            <a href="{{route('rubricas.index')}}" class="btn btn-danger">Cancelar</a>
                            <button type="submit" class="btn btn-warning">Guardar</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection