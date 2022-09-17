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
                        <h1 class="card-title font-weight-bold" style="font-size: 40px;">Seguimiento</h1>
                    </div>

                    <div class="card-body">
                    <table class="table table-striped table-hover">
                            <thead>
                                <tr style="text-align: center;background-color: black;">
                                        <th style="font-size: 25px;">
                                            Detalles del Proyecto
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
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivo}}</small> 
                                    </th>
                                </tr>
                                <tr>
                                    <!-- OBJETIVO ESPECIFICO --> 
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo Específico:  </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivos_especificos}}</small>
                                    </th> 
                                </tr>
                                                              
                            </tbody>        
                    </table>
                    <div style="height:20px;"></div>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr style="text-align: center;background-color: black;">
                                <th colspan="2" style="font-size: 25px;">
                                    Comite Tutorial
                                </th>
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
                    @foreach ($proyecto->periodos as $periodo)
                    <div style="padding-left: 1%; align-content: center; background-color: gray ">

                        <hr> DURANTE EL PERIODO {{$periodo->nombre}}
                        @php
                        $cuantos = 0;
                        $suma = 0;
                        foreach ($periodo->evaluaciones as $evaluacion) {
                            if (!is_null($evaluacion->calificacion)){
                                $cuantos ++;
                                $suma += $evaluacion->calificacion;
                            }    
                        }
                        if ($cuantos != 0)
                            echo "su calificacion fue: " . ($suma/3);
                        else 
                            echo "no tiene calificaciones.";
                        @endphp
                            <!-- TABLA DE EVALUACIONES -->  
                            <table style="width:99%" class="table table-dark table-striped">
                                <thead>
                                    <tr class="row col-12" style="text-align: center;">
                                            <th class="col-12" style="font-size: 25px;">
                                                Evaluaciones realizadas
                                            </th>
                                    </tr> 
                                </thead>  
                                <tbody>
                                    @forelse ($periodo->evaluaciones as $evaluacion)
                                    <tr>
                                        <td>
                                            {{$evaluacion->docente->nombre}} - {{$evaluacion->calificacion}} 
                                            <table class="table-striped">
                                                <tbody>
                                                    @foreach ($evaluacion->desgloces as $desgloce)
                                                    <tr>
                                                        <td>{{$desgloce->concepto}}</td>
                                                        <td>{{$desgloce->valor}}</td>
                                                        <td>{{$desgloce->observacion}}</td>
                                                    </tr>                                                        
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>
                                            Sin evaluaciones realizadas este periodo
                                        </td>
                                    </tr>
                                    @endforelse
                                                                
                                </tbody>        
                            </table>


                            <!-- TABLA DE COMPROMISOS ADQUIRIDOS -->  
                            <table style="width:99%" class="table table-dark table-striped">
                                <thead>
                                    <tr class="row col-12" style="text-align: center;">
                                            <th class="col-12" style="font-size: 25px;">
                                                Compromisos Adquiridos
                                            </th>
                                    </tr> 
                                </thead>  
                                <tbody>
                                    <tr>
                                        <th>
                                            @forelse ($periodo->compromisos as $compromiso)
                                                <li>
                                                    {{$compromiso->que}}, se programo: {{$compromiso->cuantos_programo}} 
                                                    <a href="/evidencias/{{$compromiso->evidencia->archivo}}" target="_blank" >
                                                        {{$compromiso->evidencia->archivo}}
                                                    </a>
                                                </li>
                                            @empty
                                                Sin compromisos definidos para este semestre
                                            @endforelse
                                        </th>
                                    </tr>
                                                                
                                </tbody>        
                            </table>
                            <!-- TABLA DE ACTIVIDADES ADQUIRIDOS style="margin-right: 5px; margin-left:4px"-->  
                            <table style="width:99%" class="table table-dark table-striped">
                                <thead>
                                    <tr class="row col-12" style="text-align: center;">
                                            <th class="col-12" style="font-size: 25px;">
                                                Actividades Adquiridas
                                            </th>
                                    </tr> 
                                </thead>  
                                <tbody>
                                    <tr>
                                        <th>
                                            @forelse ($periodo->actividades as $actividad)
                                                <li>{{$actividad->nombre}} - en el periodo:  "{{$actividad->etapa}}"</li>
                                            @empty
                                                Sin actividades definidas para este semestre
                                            @endforelse
                                        </th>
                                    </tr>
                                </tbody>        
                            </table>                                      

                        <hr>                        

                    </div>
                    @endforeach
                    </div>                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    
  