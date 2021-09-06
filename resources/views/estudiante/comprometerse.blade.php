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
            <i class="fas fa-users nav-icon"></i>    
        </a>
         </li>    
    </form>   
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">                                
                            Comprometerse
                            </h1>
                        </div>
                        <div class="card-body">
                          <div class="row form-group col-12">
                              <label for="" class="row col-12">Titulo</label>
                              {{$estudiante->proyecto->titulo}}
                          </div>

  
                          <div class="row form-group col-12">
                              <label for="" class="row col-12">Hipotesis</label>
                              {{$estudiante->proyecto->hipotesis}}
                          </div>


                          <div class="row form-group col-12">
                              <label for="" class="row col-12">Objetivo General</label>
                              {{$estudiante->proyecto->objetivos}}

                          </div>
                          <div class="row form-group col-12">
                              <label for="" class="row col-12">Objetivo Especifico</label>
                              {{$estudiante->proyecto->objetivose}}
                          </div>
                      <div>




                        <div>
                                    <h2 style="width: 100%; text-align:center; background:rgb(24, 23, 23); padding:0 0; color:white;margin-top:15px" class="font-weidth-bold">Compromisos</h2>
                                 </div>
  
                                 <form action="/comprometerse" method="POST">    
                                  @csrf
                                  @method('PUT')    
                                  <input type="hidden" name="periodos_id" value="{{$estudiante->semestreActual->id}}">
                                  <input type="hidden" name="proyectos_id" value="{{$estudiante->proyecto->id}}">

                                  <div class="row">
                                    <div class="col-4">
                                      <label>A que te comprometes: </label>
                                      <select name="que" id="nivel">
                                        @foreach ($compromisos as $compromiso)
                                          <option>{{$compromiso->titulo}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="col-4">

                                      <label>A cuantos te comprometes: </label>
                                      <input type="number" name="cuantos_prog" min="1" max="3"  step="1" value="1">
                                    </div>
                                    <div class="col-4">
                                      <button class="btn btn-primary" style="width:60px"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                  </div>
                                 </form>

                        <table class="table" style="width: 100%">
                          <thead>
                            <tr class="col-12">
                              <th>
                              Actividad comprometida
                              </th>
                              <th>
                                Cantidad comprometida
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
                              </td>
                       
                        </tr>  

                            @endforeach

                          </tbody>
                        </table>




                                <div>
                                <!-- espacio entre contenido-->
                                </div>
                                
                        <div>
                          <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Actividades</h2>
                        </div>
                        <table class="table" style="width: 100%">
                          <thead>
                              <tr class="col-12">
                                  <th class="col-4">
                                    <input type="text" placeholder="Actividad..." name="nombre" class="form-control" style="width: 200px">
                                  </th>
                                  <th class="col-4">
                                    <input type="text" placeholder="Periodo.." name="nombre" class="form-control" style="width: 300px">
                                  </th>
                                  <th scope="row" class="col-4">
                                    <button class="btn btn-primary" style="width:37px"><i class="fas fa-plus-circle"></i></button>
                                  </th> 
                                </tr>
                          </thead>
                      </table>

                        <table class="table">
                          <thead class="thead-dark">
                              <tr>
                                  <th scope="col">Busqueda de informacion</th>
                                  <th scope="col" style="padding-left:100px"><input type="text" placeholder="Enero 2021 - Febrero 2021" name="nombre" class="form-control"></th>
                                        
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Creacion de la herramienta</th>
                                  <td scope="col" style="padding-left:100px"><input type="text" placeholder="Marzo 2021 - Mayo 2021" name="nombre" class="form-control"></td> 
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
            </form>
</section>
@endsection
    
    
        
  
 