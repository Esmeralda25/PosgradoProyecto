@extends('layouts.master')
@section('content')
        <div style="height:60px">
        </div>  <!-- espacio del top -->  
        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                    <div class="card-header" style="text-align: center">
                        <h1 class="card-title font-weight-bold" style="text-align: center">Editar Compromisos</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('compromisos.update',$compromiso->id)}}"​​ method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row form-group col-12">
                                            <label for="" class="row col-12">Compromiso</label>
                                            <input id="titulo" name="titulo" type="text" style="width: 100%" value="{{$compromiso->titulo}}">
                                        </div>
                                        <a href="{{route('compromisos.index')}}" class="btn btn-danger">Cancelar</a>
                                        <button type="submit" class="btn btn-warning">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>  
            </div>  
        </div>          
@endsection
