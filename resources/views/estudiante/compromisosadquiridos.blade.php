@extends('layouts.master')

@section('titulo')
  <p>Estudiante</p>

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
  <div>
         <section class="content" style="padding-top: 10px">
      
        <div class="main container mt-10">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-10">
                    
                    <div class="card">
                            <form action="" method="POST">
                                <div class="card-header text-center font-weight-bold" style="font-size: 30px">Compromisos Adquiridos</div>
        
    
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
      
     </div>
@endsection
    
  