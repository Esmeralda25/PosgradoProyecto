@extends('layouts.master')
@section('content')
        <div style="height:60px">
        </div>  <!-- espacio del top -->  
        
        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="font-size: 35px;">Estudiantes del Periodo Actual</h5><br><br>
                        <h3 class="card-title font-weight-bold" >
                            
                            <div class="mb-3">        
                                <label>Periodos: </label>
                                <select id="select-periodo" name="periodo_id">
                                    <option value="">Seleccionar Periodo</option>
                                    @foreach ($periodo->periodo as $datos)
                                    
                                    <option value="{{$datos->id}}">{{$datos->nombre}}</option>
                                           
                                    @endforeach
                                </select>
                            </div>
                            
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                
                                {{-- <p><a href="#" id="enviar" value="enviar"  class="btn btn-info edit-estudiantePeriodo" />Reinscribir</a></p>--}}
                                <table class="table table-striped mt-4" id="select-estudiante">
                                    <a href="#" data-id="" data-toggle="modal" data-target="#editModal" id"enviar" class="btn btn-info edit-estudiantePeriodo">Reinscribir</a>
                                    <thead class="table table-dark">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Periodo</th>
                                            <th scope="col">Acciones</th>
                                        <tr>
                                    </thead>
                                    <tbody class="estu" >
                                    </tbody>
                                </table>
                                
                                <a href="{{route('generaciones.index')}}" class="btn btn-primary btn-block">Listar generaciones</a>

                            </div>
                        </div><!-- row -->
                    </div><!-- card body -->
                    <!-- Edit Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModal">Estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form  id="editForm" class="row g-3">
                <div class="modal-body">
                    @csrf
                    <div class="col-md-7">
                    <select class="form-control" id="periodo_id" name="periodo_id">
                        @foreach ($periodo->generacion->periodos as $datos)
                            <option value="{{$datos->id}}">{{$datos->nombre}}</option>                                                   
                        @endforeach
                    </select>
                    </div>
                    <br>
                    <div class="col-12">
                        <button type="button" class="btn btn-primary" id="actualizar-estudiante">Guardar</button>
                    </div>

                </div>
            </form>
            </div>
        </div>
    </div>
</div>
{{-- End Edit Modal --}}
                </div><!-- card -->
            </div><!-- col10 -->
        </div><!-- row -->
@endsection
@section("scripts_de_usuarios")
<script src="/js/periodoEstudiante/periodoEstudiante.js"></script>
@endsection