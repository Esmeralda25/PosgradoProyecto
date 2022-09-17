@extends('layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10"> 
                <div class="card col-12">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold" style="font-size: 40px;">Estudiante: {{$proyecto->estudiante->nombre}}</h1>
                    </div>

                    <div class="card-body">
                        <x-proyecto :proyecto=$proyecto></x-proyecto>
                        <hr> DURANTE EL PERIODO {{$proyecto->estudiante->periodo->nombre}}
                        @php
                            $periodo = $proyecto->estudiante->periodo;
                            $periodo->laravel_through_key = $proyecto->id;
                        @endphp
                        <x-periodo :periodo=$periodo></x-periodo>

                        <div style="height:15px;"></div>
                        <div style="border-color: white; border:1px" >
                            @if (is_null($proyecto->reporte($proyecto->estudiante->periodo_id)->first()))
                                SIN REPORTE
                            @else
                                REPORTE: <a href="/evidencias/{{$proyecto->reporte($proyecto->estudiante->periodo_id)->first()->reporte}}" target="_blank" >
                                    {{$proyecto->reporte($proyecto->estudiante->periodo_id)->first()->reporte}}
                                </a>
                            @endif
                        </div>
                        <hr>
                        <h3 style="border: rgb(0, 0, 0);background: rgba(223, 223, 223, 0.589)">Rubrica: {{$proyecto->estudiante->semestre->rubrica->nombre}}</h3>
                        <div class="form-group col-md-12">                    
                            <form action="{{route('proyectos.calificaiones')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Criterio</th>
                                            <th>Calificacion</th>
                                            <th>Observaciones</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($proyecto->estudiante->periodo->rubrica->criterios as $criterio)
                                        <tr> 
                                            <td>
                                                <input type="hidden" name="concepto[{{$loop->index}}]" value = "{{$criterio->descripcion}}">
                                                {{$criterio->descripcion}}
                                            </td>
                                            <td>
                                                @if($proyecto->estudiante->semestre->rubrica->tipo == "Numerica")
                                                    <input type="number" name="valor[{{$loop->index}}]" min="0" max="100">                                                 
                                                @endif
                                                @if($proyecto->estudiante->semestre->rubrica->tipo == "Alfanumerica")
                                                    <select name="valor[{{$loop->index}}]">
                                                    <option value="0">No aceptable</option>
                                                    <option value="70">Regular</option>
                                                    <option value="80">Bien</option>
                                                    <option value="90">Muy Bien</option>
                                                    <option value="100 ">Excelente</option> 
                                                    </select>        
                                                @endif
                                            </td>
                                            <td><input type="text" name="observacion[{{$loop->index}}]"></td>    
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>                               
                                <input name="proyecto_id" type="hidden" value="{{$proyecto->id}}">
                                <input name="periodo_id"  type="hidden" value="{{$proyecto->estudiante->semestre->id}}">                        
                                <button type="submit" class="btn btn-warning" tabindex="4">Calificar</a></button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
 