@extends('layouts.master')

@section('titulo')
  <p>Docente: {{ \Session::get('usuario')->nombre}}</p>

@endsection
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
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center; font-size:20px;">                                
                            Historico
                            </h1>
                        </div> 
                    <!-- /.card-header -->
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
                   
                    <!--abajo esta lo normal-->
                    PROMEDIO DE CADA UNO DE LOS REVISORES Y FECHA EN LA QUE SE EVALÚO EL PROYECTO:<br><br>
                            
                            <div class="tcontainer">
                                <table class="table table-dark table-striped mt-4">
                                            <thead class="table table-dark table-striped mt-4">
                                        
                                                <tr>
                                                    <th scope="col">Proyecto</th>
                                                    <th scope="col">Docente</th>
                                                    <th scope="col">Promedio semestral</th>
                                                    <th scope="col">Fecha en la que se evalúo</th>
                                                    <th scope="col">Semestre</th>

                                                    <th scope="col">Acciones</th>


                                                <tr> 
                                            </thead>
                                         @foreach($evaluacion as $cal) 
                                            <tr>
                                                
                                                <th scope="col">{{$cal->proyecto_id}}</th>
                                                <th scope="col">{{$cal->docente->nombre}}</th>
                                                <th scope="col">{{$cal->calificacion}}</th>
                                                <th scope="col">{{$cal->fecha}}</th>
                                                <th scope="col">{{$cal->periodo->nombre}}</th>

                                                <td>
                                                    <a href="/conceptos/{{$cal->id}}" class="btn btn-info">VER</a>
                                                </td>

                                               
                                                    </th>
                                                    <tr> 
                                            @endforeach
                                            <tbody>                                               
                                            </tbody>
                                </table>
                       
                            </div><br>
                        
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection