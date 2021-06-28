@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link active far fa-circle nav-icon">Cerrar Sesión</a>
        </li>    
    </form>
    
@endsection

@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center"> <!-- aquí -->
        <div class="col-md-10"> <!-- aquí -->
            <section class="content"> <!-- aquí -->
            <div class="container-fluid">
            <a href="/asignaciones" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>
                <div style="height: 100%"><!-- aquí -->
                </div>  <!-- Info boxes -->
        
                <div class="row" > 
                    <div class="col-md-12">
                        <div class="card" style="height: 100%">
                            <div class="card-header" style="text-align: center">
                                <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Asignar Proyecto</h5>
                            </div>
                            
                            <div class="card-header text-center font-weight-bold" style="font-size: 15px " >
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Estudiante: </label>
                                    <input type="text" class="row col-12" name="nombre" value="{{ $proyecto->estudiante->nombre }}">
                                </div>


                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Titulo: </label>
                                    <input type="text" class="row col-12" name="titulo" value="{{ $proyecto->titulo }}">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Hipotesis: </label>
                                    <input type="text" class="row col-12" name="hipotesis" value="{{ $proyecto->hipotesis}}">
                                </div>


                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivo General</label>
                                    <input type="text" class="row col-12" name="objetivos" value="{{ $proyecto->objetivos}}">
                                </div>


                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivo Espesifico</label>
                                    <input type="text" class="row col-12" name="objetivose" value="{{ $proyecto->objetivose}}">
                                </div>
     
                                
                                <div class="row col-12">
                                    <label for="nivel" style="padding: 2px; font-size:20px">Asesor: </label>
                                        <select name="nivel" id="nivel" style="width: 1000px; height:35px">                                          
                                            
                                          @foreach($docentes as $asesor)
                                          <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                          @endforeach
                                        </select>
                                        
                                </div>
                                

                                <div class="row col-12">
                                    <label for="nivel" style="padding: 2px; font-size:20px">Revisor 1: </label>
                                        <select name="nivel" id="nivel" style="width: 1000px; height:35px">
                                        @foreach($docentes as $asesor)  
                                          <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                        @endforeach
                                        </select>
                                </div>
                                <div class="row col-12">
                                  <label for="nivel" style="padding: 2px; font-size:20px">Revisor 2: </label>
                                    <select name="nivel" id="nivel" style="width: 1000px; height:35px">                                   
                                    @foreach($docentes as $asesor)  
                                      <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="row col-12">
                                    <label for="nivel" style="padding: 2px; font-size:20px">Revisor 3: </label>
                                        <select name="nivel" id="nivel" style="width: 1000px; height:35px">
                                          @foreach($docentes as $asesor)  
                                          <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                          @endforeach
                                          
                                </div>
                                <div class="row col-12">
                                    <label for="" style="padding: 2px; font-size:20px">hola </label>
                                        <select name="" id="nivel" style="width: 1000px; height:35px">
                                          
                                </div>
                               
                                <div class="row col-12">   
                                    <button type="submit" class=" row btn btn-warning align-center" style="width: 500px; height:35px; margin-left: 150px; margin-top:10px; padding: 5px"><a>Asignar</a></button>                               
                                </div>
                            </div>

                            
                    
                    
                        </div> <!--class="card"-->
                    </div><!--class="col-md-12"-->
                </div> <!--class="row"-->
            </div> <!--class="container-fluid"-->
        </section>
        </div>
    </div>
      
</div>
 

@endsection
