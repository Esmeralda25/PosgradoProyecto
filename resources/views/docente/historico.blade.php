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
                            Historico
                            </h1>
                        </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table class="table table-striped table-hover">
                            <thead>
                                <tr style="text-align: center;background-color: black;">
                                        <th style="font-size: 25px;">
                                            Detalles del Proyecto
                                        </th>
                                </tr> 
                            </thead>  
                            <tbody>
                                <tr>
                                    <!-- TITULO -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Título: </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->titulo}}</small>
                                    </th>
                                </tr>
                                <tr>
                                    <!-- HIPOTESIS -->  
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Hipótesis: </label> 
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->hipotesis}}</small> 
                                    </th>
                                </tr>
                                <tr>
                                    <!-- OBJETIVO GENERAL -->  
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo General: </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivos}}</small> 
                                    </th>
                                </tr>
                                <tr>
                                    <!-- OBJETIVO ESPECIFICO --> 
                                    <th>
                                        <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo Específico:  </label>
                                        <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivose}}</small>
                                    </th> 

                                </tr>
                                                              
                            </tbody>        
                    </table>
                    <table class="table table-striped table-hover">
                            <thead>
                                <tr style="text-align: center;background-color: black;">
                                    <th scope="col">Id Revision</th>
                                    <th scope="col">Promedio</th>
                                    <th scope="col">Fecha</th>
                                               
                                </tr> 
                            </thead>  
                            <tbody>
                            @foreach($nuevo as $evalua) 
                                <tr> <!--que imprima promedios de cada revision de un proyecto, me imprime los 3 promedios 
                            de diferente idproyecto-->
                                    <!-- REVISION 1 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 1</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <!-- REVISION 2 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 2</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <!-- REVISION 3 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 3</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <!-- REVISION 4 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 4</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <!-- REVISION 5 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 5</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <!-- REVISION 6 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 6</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <!-- REVISION 7 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 7</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <!-- REVISION 8 -->  
                                    <th>
                                        <label for="" style="font-family:Arial; color: white;font-size: 25px;">Revision 8</label>
                                    </th>
                                    <th>
                                        @if(!is_null($nuevo))
                                        {{$evalua->calificacion}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin Calificacion
                                        @endif
                                    </th>
                                    <th>
                                        @if(!is_null($evalua))
                                        {{$evalua->fecha}}
                                        @endif
                                        @if(is_null($nuevo))
                                        sin fecha
                                        @endif
                                    </th>
                                </tr>
                                
                             @endforeach 
                            </tbody>        
                    </table>
                    <!--abajo esta lo normal-->
            
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
</section> 
@endsection