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
    <a href="/docentes" class="nav-link">
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
                            Pagina Principal
                            </h1>
                        </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                        <div class="container" style="margin-top:20px">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody">
                                               <tr>
                                                   <th class="row">
                                                       <div>
                                                            Nombre del Proyecto: {{$proyecto->titulo}}
                                                       </div>
                                                   </th> 
                                                   <th></th>  
                                               </tr>
                                               <tr>
                                                   <th class="row">
                                                       <div>
                                                            Hipotesis: {{$proyecto->hipotesis}}
                                                       </div>
                                                   </th> 
                                                   <th></th>  
                                               </tr>
                                               <tr>
                                                   <th class="row">
                                                       <div>
                                                            Objetivo General: {{$proyecto->objetivos}}
                                                       </div>
                                                   </th> 
                                                   <th></th>  
                                               </tr>
                                               <tr>
                                                   <th class="row">
                                                       <div>
                                                            Objetivo especificos: {{$proyecto->objetivose}}
                                                       </div>
                                                   </th> 
                                                   <th></th>  
                                               </tr>
                                               <tr>
                                            
                                                   <th></th>  
                                               </tr>
                                                
                                            </tbody>
                                        </table>
                                
                                    </div>
                                </div>
                            </div>
                           
                                Promedio de cada uno de los revisores y la fecha en la que se evaluó en proyecto:
                                <div class="tcontainer">
                                <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                            
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Promedio</th>
                                                        <th scope="col">Fecha</th>
                                                    <tr> 
                                                </thead>
                                                @foreach($nuevo as $evalua) 
                                                <tr> 
                                                    <th scope="col">{{$evalua->id}}</th>
                                                    <th scope="col">{{$evalua->calificacion}}</th>
                                                    <th scope="col">{{$evalua->fecha}}</th>

                                                   
                                                        </th>
                                                        <tr> 
                                                @endforeach
                                            
                                                <tbody>                                               
                                                </tbody>
                                            </table>
                           
                                </div>
                               <button><a href="/docentes">Regresar</a></button>
                            
                            </div>
                            
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection