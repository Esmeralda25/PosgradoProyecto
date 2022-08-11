@extends('layouts.master')

@section('titulo')
  <p>Estudiante</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="{{route('entrada.salida')}}">
        <li class="nav-item"> 
            @csrf
            <a href="{{route('entrada.salida')}}" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('regresar') 
    <a href="/estudiantes" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection

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
                        <form action="/registrar" method="POST">
                        @csrf
                            <div class="card-header text-center font-weight-bold" style="font-size: 30px">Registrar Proyecto</div>
                            <div class="justify-content-center" style="margin: 15px">
                                <input type="hidden" name="estudiante_id" value="{{ $estudiante->id }}">
                            </div>  
                            <div class="card-body">
                                <div class="row form-group col-12" >
                                    <label for="" class="row col-12">Título</label>
                                    <input type="text" class="row col-12" name="titulo">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Hipotesis</label>
                                    <input type="text" class="row col-12" name="hipotesis">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivo General</label>
                                    <input type="text" class="row col-12" name="objetivos">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivos Especificos</label>
                                    <textarea name="objetivose" style="width: 100%;" cols="30" rows="10"></textarea>
                                </div>
                            </div>                            
                            <div style=" margin-bottom:30px;">
                                <button type="submit" class="btn btn-warning" style="margin: 5"><a style="color: black">Registrar</a></button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>  
  </div>
</section>
@endsection