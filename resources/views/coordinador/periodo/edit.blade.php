@extends('layouts.master')

@section('regresar') 
    <a href="/generaciones" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('coordinadores')}}" class="nav-link" >Inicio</a>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Periodo</h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <!--<input id="coordinador" name="coordinador" type="text" style="width: 100%" tabindex="3"> -->
                                
                                    <form action="/actualizar-periodos/{{$periodo->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf  
                                    @method('PUT')

                                        <div class="card-body">
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Nombre</label>
                                                <input name="nombre" type="text" style="width: 100%" tabindex="2" value="{{$periodo->nombre}}">                                        
                                            </div>
                                            
                                            <label for="" class="row col-12">Fecha Inicio</label>
                                            <input name="fechaInicio" type="date" style="width: 100%" style="width: 170px" value="{{$periodo->fechaInicio}}">                                        
        
                                            <label for="" class="row col-12">Fecha Fin</label>
                                            <input name="fechaFin" type="date" style="width: 100%" style="width: 170px" value="{{$periodo->fechaFin}}">                                        

                                            <label for="" class="row col-12">Rubrica</label>

                                            <select name="rubrica">
                                                @foreach ($rubricas as $rubrica)
                                                <option value="{{$rubrica->id}}">{{$rubrica->nombre}}</option>                                                   
                                                @endforeach
                                            </select>

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="">
                                                        Estado actual del perido
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
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
                                            <a href="/periodos" class="btn btn-danger" tabindex="5">Cancelar</a>
                                            <button type="submit" class="btn btn-warning" tabindex="4">Guardar</button>
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
