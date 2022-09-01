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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Periodo</h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('periodos.update',$periodo->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf  
                                    @method('PUT')
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label>Nombre</label>
                                                <input name="nombre" type="text" value="{{$periodo->nombre}}">                                        
                                            </div>
                                            <div class="mb-3">
                                                <label>Fecha Inicio</label>
                                                <input name="fechaInicio" type="date" value="{{$periodo->fechaInicio}}">                                            
                                            </div>
                                            <div class="mb-3">        
                                                <label>Fecha Fin</label>
                                                <input name="fechaFin" type="date" value="{{$periodo->fechaFin}}">                                        
                                            </div>
                                            <div class="mb-3">        
                                                <label>Rubrica</label>
                                                <select name="rubrica_id">
                                                    @foreach ($periodo->pe->rubricas as $rubrica)
                                                    <option value="{{$rubrica->id}}">{{$rubrica->nombre}}</option>                                                   
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label>
                                                    Estado actual del perido
                                                </label>
                                                <select name="estado">                                                       
                                                    {{--
                                                        'Inicio','Comprometerse','Seguimiento','Reportar','Evaluacion','Concluido'
                                                    --}} 
                                                    @if ($periodo->estado=="Inicio")
                                                        <option value="Inicio" selected>Inicio</option>
                                                    @else
                                                        <option value="Inicio">Inicio</option>
                                                    @endif
                                                    @if ($periodo->estado=="Comprometerse")
                                                        <option value="Comprometerse" selected>Comprometerse</option>
                                                    @else
                                                        <option value="Comprometerse">Comprometerse</option>
                                                    @endif
                                                    @if ($periodo->estado=="Seguimiento")
                                                        <option value="Seguimiento" selected>Seguimiento</option>
                                                    @else
                                                        <option value="Seguimiento">Seguimiento</option>
                                                    @endif
                                                    @if ($periodo->estado=="Reportar")
                                                        <option value="Reportar" selected>Reportar</option>
                                                    @else
                                                        <option value="Reportar">Reportar</option>
                                                    @endif
                                                    @if ($periodo->estado=="Evaluacion")
                                                        <option value="Evaluacion" selected>Evaluacion</option>
                                                    @else
                                                        <option value="Evaluacion">Evaluacion</option>
                                                    @endif
{{--
una vez evaluado regresa a Seguimiento
                                                    @if ($periodo->estado=="Evaluado")
                                                        <option value="Evaluado" selected>Evaluado</option>
                                                    @else
                                                        <option value="Evaluado">Evaluado</option>
                                                    @endif
--}}
                                                    @if ($periodo->estado=="Concluido")
                                                        <option value="Concluido" selected>Concluido</option>
                                                    @else
                                                        <option value="Concluido">Concluido</option>
                                                    @endif
                                                </select>
                                            </div>        
                                        </div>
                                    </div> 
                                    <a href="{{route('periodos.index',$periodo->generacion_id)}}" class="btn btn-danger">Cancelar</a>
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
