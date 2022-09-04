@extends('layouts.master')
@section('regresar') 
    <a href="/estudiantes" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
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
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$estudiante->proyecto->titulo}}</small>
                                    </th>
                                </tr>
                                <tr>
                                    <!-- HIPOTESIS -->  
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Hipótesis: </label> 
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$estudiante->proyecto->hipotesis}}</small> 
                                    </th>
                                </tr>
                                <tr>
                                    <!-- OBJETIVO GENERAL -->  
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo General: </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$estudiante->proyecto->objetivos}}</small> 
                                    </th>
                                </tr>
                                <tr>
                                    <!-- OBJETIVO ESPECIFICO --> 
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo Específico:  </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$estudiante->proyecto->objetivose}}</small>
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
                            @if (is_null($estudiante->proyecto->comite_id))
                                <tr>
                                    <th colspan="2">SIN ASIGNAR</th>
                                </tr>
                            @else
                                <tr>
                                    <th>Asesor</th>
                                    <td>{{$estudiante->proyecto->comite->docenteAsesor->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Revisor 1</th>
                                    <td>{{$estudiante->proyecto->comite->docenteRevisor1->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Revisor 2</th>
                                    <td>{{$estudiante->proyecto->comite->docenteRevisor2->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Revisor 3</th>
                                    <td>{{$estudiante->proyecto->comite->docenteRevisor3->nombre}}</td>
                                </tr>
                                
                            @endif
                        </tbody>
                    </table>
                        <div style="height:20px;"></div>
                        <!-- TABLA DE COMPROMISOS ADQUIRIDOS -->  
                        <table class="table table-dark table-striped">
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
                                        @forelse ($estudiante->proyecto->compromisos( $estudiante->semestre->id )->get() as $compromiso)
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
                        <div style="height:15px;"></div>
                        <!-- TABLA DE ACTIVIDADES ADQUIRIDOS style="margin-right: 5px; margin-left:4px"-->  
                        <table class="table table-dark table-striped">
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
                                        @forelse ($estudiante->proyecto->actividades( $estudiante->semestre->id )->get() as $actividad)
                                            <li>{{$actividad->nombre}} - en el periodo:  "{{$actividad->periodo}}"</li>
                                        @empty
                                            Sin actividades definidas para este semestre
                                        @endforelse
                                    </th>
                                </tr>
                            </tbody>        
                        </table>                                      
                    </div>                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
    
  