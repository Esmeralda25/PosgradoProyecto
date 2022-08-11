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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/estudiantes')}}" class="nav-link">Inicio</a>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">                                
                                Compromisos Adquiridos.....                          
                            </h1>
                        </div>
                            <form action="" method="POST">        
                                    <div class="container">
                                        <div class="card-body">
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Proyecto</label>
                                                <input type="text" class="row col-12" name="nombre">
                                            </div>
            
                    
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Titulo</label>
                                                <input type="text" class="row col-12" name="nombre">
                                            </div>
            
                
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Objetivo General</label>
                                                <input type="text" class="row col-12" name="nombre">
                                            </div>
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Objetivo Especifico</label>
                                                <input type="text" class="row col-12" name="nombre">
                                            </div>
            
                                        
                                        <div>
                                        <!-- espacio entre contenido-->
                                        </div>
                                        <div>
                                            <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Compromisos</h2>
                                        </div>
                                        <table class="table">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Articulos JCR sometidos</th>
                                                <th scope="col" style="padding-left:100px"><input type="text" placeholder="1" name="nombre" class="form-control"></th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">Conferencias Nacionales</th>
                                                <td scope="col" style="padding-left:100px"><input type="text" placeholder="3" name="nombre" class="form-control"></td> 
                                            </tr>
                                            </tbody>
                                        </table>


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
                                            <button class="btn btn-danger"><a href="{{url('/compromisos')}}" onclick="alerta()" style="color: black">Aceptar</a></button>
                                        </div>
                                    
        
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
    
  