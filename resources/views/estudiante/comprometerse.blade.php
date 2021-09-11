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

                      <!-- TITULO -->  
                  <div class="row form-group col-12" style="text-size-adjust: 20px;">
                    <div style="color: white;font-size: 27px; " class="col-12 ">
                      <label for="" >Título:</label>
                    </div>
                    <div style="color: white;font-size: 20px; " class="col-12 ">
                      {{$estudiante->proyecto->titulo}} 
                    </div>
                  </div>

                  <!-- HIPOTESIS -->  
                  <div class="row form-group col-12" style="text-size-adjust: 20px;">
                      <div style="color: white;font-size: 27px; " class="col-12 ">
                        <label for="" >Hipótesis:</label>
                      </div>
                      <div style="color: white;font-size: 20px; " class="col-12 ">
                      {{$estudiante->proyecto->hipotesis}}
                      </div>
                  </div>

                    <!-- OBJETIVO GENERAL -->  
                  <div class="row form-group col-12" style="text-size-adjust: 20px;">
                      <div style="color: white;font-size: 27px; " class="col-12">
                        <label for="" >Objetivo General:</label>
                      </div>
                      <div style="color: white;font-size: 20px; " class="col-12 ">
                      {{$estudiante->proyecto->objetivos}}
                      </div>
                  </div>

                 <!-- OBJETIVO ESPECIFICO -->  
                  <div class="row form-group col-12" style="text-size-adjust: 20px;">
                    <div style="color: white;font-size: 27px; " class="col-12">
                      <label for="" >Objetivo Específico:</label>
                    </div>
                    <div style="color: white;font-size: 20px; " class="col-12 ">
                    {{$estudiante->proyecto->objetivose}}
                    </div>
                  </div>

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
                  <tbody>
                    <tr>
                      <th style="background-color:black  ; height:5px"></th>
                    </tr>
                  <table class="table table-dark table-striped">
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
                                    <button  type="submit" class="btn btn-warning" style="width:60px; margin-right: 5px; margin-left:6px" style="display: inline"><i class="fas fa-minus-circle"></i></button>
                                  </form>
                                </td>
                              </tr>  
                            @endforeach

                          </tbody>
                        </table>                                            
                  </tbody>        
                </table>
                  <div style="margin-top: 20px;">
                    <h2 style="width: 100%; text-align:center; background:black; padding:0 0; color:white;margin-top:15px">Actividades</h2>
                  </div>
                        <!-- TABLA DE ACTIVIDADES -->

                  <table class="table table-dark table-striped">
                    <thead class="table table-dark">
                        <tr class="col-12">
                          <th class="col-5">
                            <input type="text" placeholder="Actividad..." name="nombre" class="form-control" style="margin-right: 5px; margin-left:4px; width: 200px">
                          </th>
                          <th class="row col-7">
                            <input type="text" placeholder="Periodo.." name="nombre" class="form-control" style="width: 200px">
                            <button class="btn btn-success" style="margin-right: 5px; margin-left:4px;"><i class="fas fa-plus-circle"></i></button>
                          </th> 
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <form action="/comprometerse_act" method="POST">    
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
                            <tr>
                              <th scope="row">Difucion del trabajo</th>
                              <td scope="col" style="padding-left:100px"><input type="text" placeholder="01 Junio 2021 - 30 Junio 2021 " name="nombre" class="form-control"></td> 
                            </tr>
                          </tbody>
                  </table>

                  <div>
                      <button class="btn btn-danger"><a href="{{url('/mainestudiante2')}}" style="color: rgb(0, 0, 0)" onclick="alerta()">Someter/Modificar</a></button>
                  </div>  
            </div>
        </div>      
      </div>
    </div>   
  </div>   
</section>
@endsection
    
    
        
  
 