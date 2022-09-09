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
                        <table class="table table-striped">
                            <thead class="table-dark" style="text-align: center;background-color: black;font-size: 25px;">
                                    <tr>
                                        <th>
                                            DETALLES DEL PROYECTO
                                        </th>
                                </tr> 
                            </thead>  
                            <tbody>
                                <tr>
                                    <!-- TITULO -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Título: </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->titulo}}</small>
                                    </th>
                                </tr>
                                <tr>
                                    <!-- HIPOTESIS -->  
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Hipótesis: </label> 
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->hipotesis}}</small> 
                                    </th>
                                </tr>
                                <tr>
                                    <!-- OBJETIVO GENERAL -->  
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo General: </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivos}}</small> 
                                    </th>
                                </tr>
                                <tr>
                                    <!-- OBJETIVO ESPECIFICO --> 
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo Específico:  </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivose}}</small>
                                    </th> 
                                </tr>
                                                              
                            </tbody>        
                    </table>
                    <div style="height:20px;"></div>
                    <table class="table table-striped">
                        <thead class="table-dark" style="text-align: center;background-color: black;font-size: 25px;">
                            <tr>
                                <td colspan="2">
                                    COMITE TUTORIAL
                                </td>
                            </tr> 
                        </thead>  
                        <tbody>
                            @if (is_null($proyecto->comite_id))
                                <tr>
                                    <th colspan="2">SIN ASIGNAR</th>
                                </tr>
                            @else
                                <tr>
                                    <th>Asesor</th>
                                    <td>{{$proyecto->comite->docenteAsesor->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Revisor 1</th>
                                    <td>{{$proyecto->comite->docenteRevisor1->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Revisor 2</th>
                                    <td>{{$proyecto->comite->docenteRevisor2->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Revisor 3</th>
                                    <td>{{$proyecto->comite->docenteRevisor3->nombre}}</td>
                                </tr>
                                
                            @endif
                        </tbody>
                    </table>
                    <div style="height:20px;"></div>

                        <hr> DURANTE EL PERIODO {{$proyecto->estudiante->periodo->nombre}}
                            <!-- TABLA DE ACTIVIDADES-->  
                            <table class="table table-striped">
                                <thead class="table-dark" style="text-align: center;background-color: black;font-size: 25px;">
                                    <tr>
                                        <td colspan="2">CRONOGRAMA</td>
                                    </tr> 
                                    <tr>
                                        <td>Actividad</td>
                                        <td>Periodo</td>
                                    </tr> 
                                </thead>  
                                <tbody>
                                @forelse ($proyecto->actividades( $proyecto->estudiante->periodo->id )->get() as $actividad)
                                    <tr>
                                        <td>{{$actividad->nombre}}</td>
                                        <td>{{$actividad->etapa}}</td>                                                     
                                    </tr>
                                @empty
                                    Sin actividades definidas para este semestre
                                @endforelse
                                </tbody>        
                            </table>    
                            <div style="height:15px;"></div>


                            <!-- TABLA DE COMPROMISOS ADQUIRIDOS -->  
                            <table class="table table-striped">
                                <thead class="table-dark" style="text-align: center;background-color: black;font-size: 25px;">
                                    <tr>
                                            <td colspan="4">
                                                COMPROMISOS ADQUIRIDOS
                                            </td>
                                    </tr> 
                                    <tr>
                                        <td scope="col">Que</td>
                                        <td scope="col">Cuantos comprometio</td>
                                        <td scope="col">Cuantos cumplio</td>
                                        <td scope="col">Evidencias</td>
                                    <tr> 

                                </thead>  
                                <tbody>
                                    @forelse ($proyecto->compromisos( $proyecto->estudiante->periodo->id )->get() as $compromiso)
                                    <tr>
                                        <td>{{$compromiso->que}}</td>
                                        <td>{{$compromiso->cuantos_programo}}</td>
                                        <td>{{$compromiso->cuantos_cumplio}}</td>
                                        <td>
                                            <a href="/evidencias/{{$compromiso->evidencia->archivo}}" target="_blank" >
                                                {{$compromiso->evidencia->archivo}}
                                            </a>
                                        </tr>
                                    </td>
                                    @empty
                                        Sin compromisos definidos para este semestre
                                    @endforelse
                                                                
                                </tbody>        
                            </table>
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
                    
                            <div id="idcontenido">

                            </div>

                            <div class="tcontainer">
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
                                                @foreach($criterios as $relacion)
                                                <tr> 
                                                    <td><input type="hidden" name="concepto[{{$loop->index}}]" value = "{{$relacion->descripcion}}">
                                                        {{$relacion->descripcion}}</td>
                                                        @php
//                                                                        var_dump("");
                                                        @endphp
                                                    <td>@if($proyecto->estudiante->semestre->rubrica->tipo == "Numerica")
                                                        <input type="number" name="valor[{{$loop->index}}]"
                                                                            min="0" max="100">                                                 
                                                   @endif

                                                   @if($proyecto->estudiante->semestre->rubrica->tipo == "Alfanumerica")
                                                        <select name="valor[{{$loop->index}}]">
                                                        <option value="0">No aceptable</option>
                                                        <option value="70">Regular</option>
                                                        <option value="80">Bien</option>
                                                        <option value="90">Muy Bien</option>
                                                        <option value="100 ">Excelente</option> 
                                                        </select>        
                                                   @endif</td>
                                                    <td><input type="text" name="observacion[{{$loop->index}}]"></td>    
                                                </tr>
                                        
                                                    @endforeach

                                            </tbody>
                                        </table>                               
                                <div class="mb-3">
                                <input name="proyecto_id" type="hidden" style="width: 100%" tabindex="2" value="{{$proyecto->id}}">
                                <input name="periodo_id" type="hidden" style="width: 100%" tabindex="2" value="{{$proyecto->estudiante->semestre->id}}">

                                </div>
                            </div>
                        
                        <tr>
                        <th class="row">
                        <div>
                        <button type="submit" class="btn btn-warning" tabindex="4">Calificar</a></button>
                        </div>                            
                        </th>           
                         </tr>
                         </form>

                        
                    </div>

                    </div>                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
 