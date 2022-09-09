@extends('layouts.master')
@section('content')
    <!--ESTUDIANTE INDEX -->  
<section class="content">
  <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->          
   <div class="main container">
     <div class="row justify-content-center">
       <div class="col-md-10">

           <!-- Main content -->
    <section class="content" style="padding-top: 10px">
      <div>
        <div class="main container mt-10">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-10">
                    <div class="card col-md-10 mt-12"">
                        <form action="{{route('proyectos.update',$proyecto->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header text-center font-weight-bold" style="font-size: 30px">Registrar Proyecto</div>
                            <div class="justify-content-center" style="margin: 15px">
                                <input type="hidden" name="estudiante_id" value="{{$proyecto->estudiante_id}}">
                            </div>  
                            <div class="card-body">
                                <div class="row form-group col-12" >
                                    <label for="" class="row col-12">Título</label>
                                    <input type="text" class="row col-12" name="titulo" value="{{$proyecto->titulo}}">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Hipotesis</label>
                                    <input type="text" class="row col-12" name="hipotesis"  value="{{$proyecto->hipotesis}}">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivo General</label>
                                    <input type="text" class="row col-12" name="objetivo"  value="{{$proyecto->objetivo}}">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivos Especificos</label>
                                    <textarea name="objetivos_especificos" style="width: 100%;" cols="30" rows="10">{{$proyecto->objetivos_especificos}}</textarea>
                                </div>
                            </div>                            
                            <div style=" margin-bottom:30px;">
                                <button type="submit" class="btn btn-warning" style="margin: 5"><a style="color: black">Actualizar</a></button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>  
  </div>
</section>
@endsection