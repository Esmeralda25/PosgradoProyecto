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
                        <h5 class="card-title font-weight-bold" style="text-align: center">Agregar Periodo</h5><br>
                   </div> <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('periodos.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                            <div class="card-body">
                                                <input type="hidden" name="generacion_id" value="{{$generacion_id}}">       
                                                <div class="mb-3">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nombre" value="{{old('nombre')}}" style="width: 100%">
                                                </div>
                                                <div class="mb-3"">                            
                                                    <label>Fecha Inicio</label>
                                                    <input type="date" placeholder="" name="fechaInicio" value="{{old('fechaInicio')}}"">
                                                </div>
                                                <div class="mb-3">                            
                                                    <label>Fecha Fin</label>
                                                    <input type="date" placeholder="" name="fechaFin" value="{{old('fechaFin')}}">    
                                                </div>
                                            </div>
                                            <a href="{{route('periodos.index',$generacion_id)}}" class="btn btn-danger">Cancelar</a>
                                            <button type="submit" class="btn btn-warning">Guardar</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
