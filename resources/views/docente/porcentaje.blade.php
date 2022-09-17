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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Asignar Avance</h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="container">

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
                                    <form action="{{route('proyectos.guardarAvance', $proyecto->id )}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                                <div class="mb-3 form-group">
                                                <label for="" class="form-label">Avance (En porcentaje %)</label><br>
                                                <input type="number" min="0" max="100" step="1"  name="avance" size="5" value="{{$proyecto->avance}}">
                    
                                                </div> 
                                                <button type="submit" class="btn btn-primary" tabindex="4"><a>Guardar</a></button>
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
