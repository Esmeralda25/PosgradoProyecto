@extends('layouts.master')

@section('titulo')
  <p>Docente: {{ \Session::get('usuario')->nombre}}</p>

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
    <a href="/estudiantes" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('content')
<section class="content">
  <div class="container-fluid">
    <div style="height:60px">
    </div> 
    <!-- espacio del top -->  
    <div class="row justify-content-center" >
      <div class="col-10">
        <div class="card col-12">
          <div class="card-header">
            <h1 class="card-title font-weight-bold" style="font-size: 40px;">Comprometerse</h1>
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
                @if (session('message'))
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>¡Bien!,</strong> {{Session::get('message')}}
                    </div> 
                @endif
                @if (session('borrar'))
                    <div class="alert alert-warning alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>¡Aviso!,</strong> {{Session::get('borrar')}}
                    </div> 
                @endif  
                @if (session('incorrecto'))
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>¡Aviso!,</strong> {{Session::get('incorrecto')}}
                    </div> 
                @endif 

              <!-- TABLA DE COMPROMISOS -->
              <div>
                <h2 style="width: 100%; text-align:center; background:black; padding:0 0; color:white;margin-top:15px">Compromisos</h2>
              </div>
                <table class="table table-dark table-striped">
                  <thead>
                    <tr class="row col-12">
                      <form action="/comprometerse" method="POST">    
                        @csrf
                          @method('PUT')    
                            <input type="hidden" name="periodos_id" value="{{$estudiante->semestreActual->id}}">
                            <input type="hidden" name="proyectos_id" value="{{$estudiante->proyecto->id}}">
                        <th class="col-7">
                          A que te comprometes: 
                          <select name="que" id="nivel" style="margin-right: 5px; margin-left:4px">
                            @foreach ($compromisos as $compromiso)
                                <option>{{$compromiso->titulo}}</option>
                            @endforeach
                          </select>
                        </th>
                        <th class="row col-5">
                          Cantidad: 
                          <input type="number" name="cuantos_prog" min="1" max="3"  step="1" value="1" style="margin-right: 5px; margin-left:6px">
                          <button class="btn btn-warning" style="width:60px"><i class="fas fa-plus-circle"></i></button>
                        </th>

                      </form>  
                    </tr> 
                  </thead>         
                </table>

                <table class="table table-dark table-striped" style="margin-top: 10px;">
                      <thead class="table table-dark">
                            <tr class="col-12">
                              <th>
                                ACTIVIDAD COMPROMETIDA: 
                              </th>
                              <th>
                                CANTIDAD COMPROMETIDA:
                              </th>                                    
                          </tr>
                          </thead>                                    
                          <tbody>
                            @foreach ($estudiante->proyecto->compromisos( $estudiante->semestreActual->id )->get() as $compromiso)
                              <tr>
                                <td >
                                  {{$compromiso->que}}
                                </td>
                                <td>
                                  {{$compromiso->cuantos_prog}}
                                  <form action="/comprometerse/{{$compromiso->id}}" method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button id="com"  type="submit" class="btn btn-warning" style="width:60px; margin-right: 5px; margin-left:6px" style="display: inline"><i class="fas fa-minus-circle"></i></button>
                                  </form>
                                </td>
                              </tr>  
                            @endforeach

                          </tbody>
                        </table>
                        <div style="height:20px;"></div>

                  <div style="margin-top: 20px;">
                    <h2 style="width: 100%; text-align:center; background:black; padding:0 0; color:white;margin-top:15px">Actividades</h2>
                  </div>
                        <!-- TABLA DE ACTIVIDADES -->
                  <table class="table table-dark table-striped">
                    <thead class="table table-dark">
                        <tr class="col-12">
                          <form action="/comprometerse" method="POST">    
                              @csrf
                                @method('PUT')    
                                  <input type="hidden" name="periodos_id" value="{{$estudiante->semestreActual->id}}">
                                  <input type="hidden" name="proyectos_id" value="{{$estudiante->proyecto->id}}">
                                  <th class="col-3">
                                    <input type="text" placeholder="Actividad..." name="nombre" class="form-control" style="margin-right: 5px; margin-left:4px; width: 200px">
                                  </th>
                                  <th class="row col-9">
                                  <input type="text" placeholder="Periodo..." name="periodo" class="form-control" style="margin-right: 5px; margin-left:4px; width: 200px">

                                    <button class="btn btn-warning" style="width:60px"><i class="fas fa-plus-circle"></i></button>
                                  </th> 
                          </form>  
                          @if (count($errors) > 0)
                              <div class="alert alert-danger">
                               <ul>
                                 @foreach ($errors->all() as $messages)
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                                   <li>{{ $messages }}</li>
                                 @endforeach
                              </ul>
                            </div>
                          @endif
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($estudiante->proyecto->actividades( $estudiante->semestreActual->id )->get() as $actividad)

                            <th class="col-5">
                            {{$actividad->nombre}}

                            </th>
                            <th class="row col-6">
                            {{$actividad->periodo}}
                          
                            </th>
                            <th>
                            <form action="/comprometerse/{{$actividad->id}}" method="post" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button id="act" type="submit" class="btn btn-warning" style="width:60px; margin-right: 5px; margin-left:6px" style="display: inline"><i class="fas fa-minus-circle"></i></button>
                            </form>
                            @if ($errors->any())
                                  <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                      </div>
                            @endif
                            </th>
                        </tr>
                        @endforeach
                        </tbody>
                  </table>

                  <div>
                      <button class="btn btn-danger"><a href="{{url('/estudiantes')}}" style="color: rgb(0, 0, 0)" onclick="alerta()">Someter/Modificar</a></button>
                  </div>  
            </div>
        </div>      
      </div>
    </div>   
  </div>   
</section>
@endsection
    
    
        
  
 