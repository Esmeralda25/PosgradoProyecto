@extends('layouts.master')

@section('titulo')
  <p>Docente: {{ \Session::get('usuario')->nombre}}</p>

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
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center">                                
                            Modificar
                            </h1>
                        </div>
  
                        <form action="" method="POST">        
                          <table class="col-12">
                            <thead>
                                <tr>
                                    <th scope="row">
                                          <div class="mb-3 form-group">
                                            <label for="nivel">Articulos JCR sometidos: </label>
                                                  <select name="nivel" id="nivel">
                                                    
                                                    <option value="">Articulos JCR aceptados</option>
                                                    <option value="">Modelo de utilidad o patente</option>
                                                    <option value="">Conferencias nacionales</option>
                                                    <option value="">Conferencias internacionales</option>
                                                  </select>
                   
                                          </div>
                                                
                                    </th>
                                    <th scope="row">
                                        <div class="container">
                                          <button class="btn btn-primary" style="width:60px"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </th>
                                                
                                </tr>
                            </thead>
                          </table>
                                 <div>
                                    <h2 style="width: 100%; text-align:center; background:rgb(24, 23, 23); padding:0 0; color:white;margin-top:15px" class="font-weidth-bold">Compromisos</h2>
                                 </div>
                                
                                
                        <table class="table" style="width: 100%">
                                    
                          <tbody style="width: 100%">
                                <tr class="col-12">
                                    <th class="col-7">
                                    Articulos JCR sometidos
                                    </th>
                                    <th class="col-5">
                                      <input type="text" placeholder="1" name="nombre" class="form-control">
                                    </th>
                                     
                                </tr>
                                      <tr>
                                            <th >
                                                Conferencias Nacionales
                                            </th>
                                            <th>
                                                <input type="text" placeholder="3" name="nombre" class="form-control" style="width: auto">
                                            </th>
                                     
                                      </tr>  
                          </tbody>
                        </table>
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
                                <div>
                                <!-- espacio entre contenido-->
                                </div>
                                
                        <div>
                          <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Actividades</h2>
                        </div>
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
    
    
        
  
 