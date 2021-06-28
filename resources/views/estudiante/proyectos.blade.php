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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/estudiantes')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')
   <div class="main container mt-10">
     <div class="row justify-content-center">
       <div class="col-md-10">
           <!-- Main content -->
    <section class="content" style="padding-top: 10px">
      <div>
        <div class="main container mt-10">
            <div class="row justify-content-center">
                <div class="col-md-10 mt-10">
                    
                    <div class="card col-md-10 mt-10"">
                        <form action="/proyectos" method="POST">
                        
                            <div class="card-header text-center font-weight-bold" style="font-size: 30px">Proyecto de Posgrado</div>
                            @csrf 
                            <div class="justify-content-center" style="margin: 15px">
                                <input type="text" name="estudiante_id" value="{{ \Session::get('usuario')->id }}">
                                <input type="text" name="nombre" value="{{ \Session::get('usuario')->nombre }}">

                            </div>
                            
                                
                            <div class="card-body">
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Título</label>
                                    <input type="text" class="row col-12" name="titulo">
                                </div>

        
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Hipotesis</label>
                                    <input type="text" class="row col-12" name="hipotesis">
                                </div>

    
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivo General</label>
                                    <input type="text" class="row col-12" name="objetivos">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivos Especificos</label>
                                    <input type="text" class="row col-12" name="objetivose">
                                </div>
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Comite</label>
                                    <input type="text" class="row col-12" name="comite">
                                </div>

                               </div>
                            <div class="container">
                      
                        
                                <table class="col-12" style="100%">
                                    <thead>
                                        <tr>
                                            <th scope="row">
                                               <div class="mb-3 form-group">
                                                   
                                               <label for="sometidod" class="form-label">Articulos JRC Sometidos</label>
                                                <input class="form-control" list="lista" id="opciones" placeholder="Opciones">
                                                  <datalist id="lista">
                                                    <option value="Articulos JRC Sometidos">
                                                    <option value="Articulos JRC Aceptados o Publicados">
                                                    <option value="Modelo de Utilidad o Patente">
                                                    <option value="Conferencias Nacionales">
                                                    <option value="Conferencias Internacionales">
                                                  </datalist>
                       
                                                </div>  
                                                
                                            </th>
                                            <th scope="row">
                                                <div class="container">

                                    
                                                <button id="botonClick" for="opciones" class="btn btn-warning"><a style="color: black">Agregar</a></button>
                                                
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
                                            
                                            <input type="text" readonly class="form-control" for="botonClick" value=""> 
                                                
                                            </th>
                                     
                                        </tr>
                                        <tr>
                                            <th >
                                                Conferencias Nacionales
                                            </th>
                                            <th>
                                                <input type="text" readonly class="form-control" >
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
                                                <input type="date" placeholder="Periodo.." name="nombre" class="form-control" style="width: 300px">
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
                                  <button type="submit" class="btn btn-warning"><a style="color: black">Registrar</a></button>
                                </div>
                                  
    
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            
        
        </div>  
      </section>
 
       </div>
     </div>
    
   </div>
  
  @endsection