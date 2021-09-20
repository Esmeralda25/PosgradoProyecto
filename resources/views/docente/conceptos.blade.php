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
                            <h1 class="card-title font-weight-bold" style="text-align: center; font-size:20px;">                                
                            Conceptos Evaluados
                            </h1>
                        </div> 
                    <!-- /.card-header -->
                   
                    <!--abajo esta lo normal-->
            
                                Promedio de cada uno de los revisores y la fecha en la que se evaluó en proyecto:
                            
         

                                <div class="tcontainer">
                                    <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                            
                                                    <tr>
                                                        <th scope="col">Proyecto</th>
                                                        <th scope="col">Promedio</th>
                                                        <th scope="col">Fecha en la que se evalúo</th>
                                                        <th scope="col">Acciones</th>

                                                    <tr> 
                                                </thead>

                                            
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
</section> 
@endsection