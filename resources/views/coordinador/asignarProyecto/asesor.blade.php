@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/coordinadores')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <section class="content">
            <div class="container-fluid">
                <div style="height: 50px">
                </div>  <!-- Info boxes -->
                
                    
        
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="text-align: center">
                                <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Asignar Proyecto</h5>
            
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-wrench"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a class="dropdown-divider"></a>
                                            <a href="#" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="card-header text-center font-weight-bold" style="font-size: 15px">
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
                                

                                <div class="row col-12" style="padding: 10px">                                   
                                    <button type="button" class="btn btn-warning" style="padding: 5px">
                                      <a style="color: black" href="{{url('/Asignaciones')}}"  onclick="alerta()">ASIGNAR</a>
                                    </button>

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
