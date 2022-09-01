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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar un criterio de la rubrica</h1>
                        </div>
                        <form action="{{route('criterios.update',$criterio->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body"> 
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Descripcion</label>
                                    <input name="descripcion" type="text" style="width: 100%" value="{{$criterio->descripcion}}">
                                </div>

                                <a href="{{route('criterios.index', $criterio->rubrica->id )}}" class="btn btn-danger">Cancelar</a>
                                <button type="submit" class="btn btn-warning">Guardar</button>
                            </div>
                        </form>
                </div>
            </div>
        </div> 
    </div>  
</section>
@endsection