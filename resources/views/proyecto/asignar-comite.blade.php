@extends('layouts.master')

@section('regresar') 
    <a href="/listar-proyectos" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('inicio')}}" class="nav-link" >Inicio</a>
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
                                <form action="{{route('proyectos.asignarPut',$proyecto->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row col-12">
                                        <label>Asesor:</label>
                                        <select name="asesor" id="asesor" style="width: 70%;">                                                                                      
                                            @foreach($docentes as $docente)
                                                <option value="{{$docente->id}}">{{$docente->nombre}}</option>                                                        
                                            @endforeach
                                        </select>                                            
                                    </div>
                                    <div class="row col-12">
                                        <label>Revisor 1: </label>
                                            <select name="revisor1" id="revisor1" style="width: 70%;">
                                                @foreach($docentes as $docente)
                                                    <option value="{{$docente->id}}">{{$docente->nombre}}</option>                                                        
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="row col-12">
                                        <label>Revisor 2: </label>
                                            <select name="revisor2" id="revisor2" style="width: 70%;">
                                                @foreach($docentes as $docente)
                                                    <option value="{{$docente->id}}">{{$docente->nombre}}</option>                                                        
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="row col-12">
                                        <label>Revisor 3: </label>
                                            <select name="revisor3" id="revisor3" style="width: 70%;">
                                                @foreach($docentes as $docente)
                                                    <option value="{{$docente->id}}">{{$docente->nombre}}</option>                                                        
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="{{route('proyectos.sincomite')}}" class="btn btn-danger  align-center">Cancelar</a>

                                            <input type="submit" class="btn btn-warning  align-center" value="Asignar">
                                        </div>
                                    </div>
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
