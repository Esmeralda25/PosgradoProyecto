@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('regresar') 
    <a href="/listar-proyectos" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link" >Inicio</a>
</li>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Asignar Asesor</h1>
                        </div>
                            <div class="card-header text-center font-weight-bold" style="font-size: 15px " >
                                <div class="row text-left">
                                    Estudiante: {{ $proyecto->estudiante->nombre }} <br>
                                    Titulo del proyecto: {{ $proyecto->titulo }} <br>
                                    Hipotesis del proyecto: {{ $proyecto->hipotesis }} <br>
                                    Objetivo General: {{ $proyecto->objetivos }} <br>
                                    Objetivo Espesificos: {{ $proyecto->objetivose }} <br>
                                </div>
                                <hr>

                                        <form action="/asignar-comite/{{$proyecto->id}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
            
                                            <div class="row col-12">
                                                <label for="nivel" style="padding: 2px; font-size:20px">Asesor: </label>
                                                    <select name="asesor" id="sel" style="width: 1000px; height:35px">                                                                                      
                                                      @foreach($docentes as $asesor)
                                                      <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                                      @endforeach
                                                    </select>
                                                    
                                            </div>
                                            
            
                                            <div class="row col-12">
                                                <label for="nivel" style="padding: 2px; font-size:20px">Revisor 1: </label>
                                                    <select name="revisor1" id="sel" style="width: 1000px; height:35px">
                                                    @foreach($docentes as $asesor)  
                                                      <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                                    @endforeach
                                                    </select>
                                            </div>
                                            <div class="row col-12">
                                              <label for="nivel" style="padding: 2px; font-size:20px">Revisor 2: </label>
                                                <select name="revisor2" id="sel" style="width: 1000px; height:35px">                                   
                                                @foreach($docentes as $asesor)  
                                                  <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                                @endforeach
                                                
            
                                                </select>
                                            </div>
                                            <div class="row col-12">
                                                <label for="nivel" style="padding: 2px; font-size:20px">Revisor 3: </label>
                                                    <select name="revisor3" id="sel" style="width: 1000px; height:35px">
                                                      @foreach($docentes as $asesor)  
                                                      <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
                                                      @endforeach    
                                            </div>
                                                
                                            <input type="submit" class=" row btn btn-warning align-center" style="width: 500px; height:35px; margin-left: 150px; margin-top:10px; padding: 5px" value="Asignar">

                                            
                                        </form>
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
