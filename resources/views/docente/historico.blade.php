@extends('layouts.master')

@section('titulo')
  <p>Docente</p>

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
      <a href="{{url('/docentes')}}" class="nav-link">Inicio</a>
</li>
@endsection

@section('content') 
   <div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <section class="content">
    <div class="container-fluid">
    <a href="/docentes" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>

        <div style="height: 5px">
        </div>  <!-- Info boxes -->
          
            
  
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                      <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Pagina Principal Docente</h5>
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
                           
                            <h3 style="border: rgb(0, 0, 0);background: rgba(223, 223, 223, 0.589)">Rubricas</h3>
                            
                                <div class="tcontainer">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="row">Calificacion 1</th> 
                                                <th><input type="text" style="border:none" placeholder="9.8" name="nombre" id=""></th>  
                                            </tr>
                                            <tr>
                                                <th class="row">Calificacion 2</th> 
                                                <th><input type="text" style="border:none" placeholder="7.8" name="nombre" id=""></th>   
                                            </tr>
                                            <tr>
                                                <th class="row">Calificacion 3</th>  
                                                <th><input type="text" style="border:none" placeholder="9.9" name="nombre" id=""></th>  
                                            </tr>
                                            <tr>
                                                <th class="row">Calificacion 4</th> 
                                                <th style="background: white; width: 15px"><a href="{{url('/')}}"> Calificacion</a></th>  
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                           
                                </div>
                               <button><a href="/docentes">Regresar</a></button>
                               
                               
                               <div>
                                   <p></p>
                               </div>
                            
                           </div>


                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section>        
        </div>
    </div>
        
   </div>
  



@endsection