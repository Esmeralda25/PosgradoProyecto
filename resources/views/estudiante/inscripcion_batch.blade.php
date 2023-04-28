@extends('layouts.master')
@section('content')
        <div style="height:60px">
        </div>  <!-- espacio del top -->  
        
        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="font-size: 30px;">Registrar Estudiantes</h5><br>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('periodos.importarExcel',$periodo->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(Session::has('message'))
                                    <p>{{Session::get('message')}}</p>
                                    @endif
                                    <div class="mb-3">
                                        <label for="" class="form-label">Importar Registro de Estudiantes segun el siguiente</label>
                                         <a href="{{route('periodos.exportarFormatoExcel',$periodo->id)}}" class="btn btn-success text-white">Formato</a>
                                        <input id="archivo" name="archivo" type="file"  style="width: 100%" value="">
                                    </div>
                                    <button type="submit" class="btn btn-warning" "4"><a>Guardar</a></button>
                                    <a href="{{route('periodos.index',$periodo->generacion_id)}}" class="btn btn-danger">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div><!-- card -->
            </div><!-- col10 -->
        </div><!-- row -->
@endsection