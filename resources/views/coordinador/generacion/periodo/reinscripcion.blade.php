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
                                
                                <form action="{{route('periodos.EstudiantePatch',$periodo->id)}}" method="POST" id="update_form">
                                    @csrf  
                                    @method('PATCH')
                                {{-- <p><a href="#" id="enviar" value="enviar"  class="btn btn-info edit-estudiantePeriodo" />Reinscribir</a></p>--}}
                                <div align="left">
                                    <a href="{{route('periodos.index',$periodo->generacion_id)}}" class="btn btn-danger">Cancelar</a>
                                    <input type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-info" value="Reinscribir" />
                                </div>
                                <table class="table table-striped mt-4" id="select-estudiante">
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
                                </form>
                                <a href="{{route('generaciones.index')}}" class="btn btn-primary btn-block">Listar generaciones</a>

                            </div>
                        </div><!-- row -->
                    </div><!-- card body -->
                    <!-- Edit Modal -->
{{-- End Edit Modal --}}
                </div><!-- card -->
            </div><!-- col10 -->
        </div><!-- row -->
@endsection
@section("scripts_de_usuarios")
<script src="/js/periodoEstudiante/periodoEstudiante.js"></script>
@endsection