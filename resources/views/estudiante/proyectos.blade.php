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
@section('content')
    <!--ESTUDIANTE INDEX -->      
   <div class="main container">
     <div class="row justify-content-center">
       <div class="col-md-10">
       <a href="/estudiantes" class="btn btn-warning " style="margin: 10px; margin-left:10dp" tabindex="5">Regresar</a>

           <!-- Main content -->
    <section class="content" style="padding-top: 10px">
      <div>
        <div class="main container mt-10">
            <div class="row justify-content-center">
                <div class="col-md-10 mt-10">
                    
                    <div class="card col-md-10 mt-10"">
                        <form action="/addproyectos" method="POST">
                        @csrf
                            <div class="card-header text-center font-weight-bold" style="font-size: 30px">Registrar Proyecto</div>
                             
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
                                    <input type="text" class="row col-12" name="objetivo_gen">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivos Especificos</label>
                                    <input type="text" class="row col-12" name="objetivo_esp">
                                </div>
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Comite</label>
                                    <input type="text" class="row col-12" name="comite">
                                </div>

                               </div>
                            <div class="container">
                      
                            <table class="col-12">
                                <thead>
                                    <tr>
                                        <th scope="row">
                                            <div class="mb-3 form-group">
                                                {{-- action="/compromisos/{{$proyecto ?? ''->id}}" --}}
                                                <form  method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                                    <div class="row col-12">
                                                        <label for="nivel" style="padding: 2px; font-size:20px">Asesor: </label>
                                                            <select name="compromiso" id="sel" style="height:35px">                                          
                                                            @foreach($compromisos as $compromiso)
                                                            <option value="{{$compromiso->id}}">{{$compromiso->titulo}}</option>
                                                            @endforeach
                                                            </select>
                                                    </div>
                                            
                                                </form>
                                                
                                            </th>
                                           <!--  <th scope="row">
                                                <div class="container">
                                                <button id="botonClick" for="opciones" class="btn btn-warning"><a style="color: black">Agregar</a></button>
                                                </div>
                                            </th> -->
                                                
                                        </tr>
                                    </thead>
                                 </table>
                                 <!-- <div>
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
                                 espacio entre contenido
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
                                </table> -->
                                <div>
                                  <button type="submit" class="btn btn-warning" style="margin: 5"><a style="color: black">Registrar</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>  
</section>
@endsection