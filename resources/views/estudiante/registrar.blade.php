@extends('layouts.master')

@section('titulo')
  <p>Estudiante</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i class="fas fa-users nav-icon"></i>    
        </a>
         </li>    
    </form>   
@endsection

@section('content')
    <!--ESTUDIANTE INDEX -->      
   <div class="main container">
     <div class="row justify-content-center">
       <div class="col-md-10">
       <a href="/estudiantes" class="btn btn-warning " style="margin: 10px; margin-left:10dp" tabindex="5">Regresar</a>

           <!-- Main content -->
    <section class="content" style="padding-top: 10px">
      <div>
        <div class="main container mt-10">
            <div class="row justify-content-center">
                <div class="col-md-10 mt-10">
                    <div class="card col-md-10 mt-10"">
                        <form action="/registrar" method="POST">
                        @csrf
                            <div class="card-header text-center font-weight-bold" style="font-size: 30px">Registrar Proyecto</div>
                            <div class="justify-content-center" style="margin: 15px">
                                <input type="hidden" name="estudiante_id" value="{{ $estudiante->id }}">
                            </div>  
                            <div class="card-body">
                                <div class="row form-group col-12">
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
                                    <input type="text" class="row col-12" name="objetivose">
                                </div>
                            </div>                            
                            <div>
                                <button type="submit" class="btn btn-warning" style="margin: 5"><a style="color: black">Registrar</a></button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>  
</section>
@endsection