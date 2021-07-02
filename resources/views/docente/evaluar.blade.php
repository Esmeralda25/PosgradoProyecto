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
                                                    <tbody>
                                                        <tr>
                                                            <th class="row">
                                                                <a href="{{url('/')}}">Datos Generales del Proyecto</a>
                                                            </th> 
                                                            <th></th>  
                                                        </tr>
                                                        <tr>
                                                            <th class="row">
                                                                <a href="{{url('/')}}">Protocolo Entregado</a>
                                                            </th> 
                                                            <th></th>   
                                                        </tr>
                                                        <tr>
                                                            <th class="row">
                                                                <a href="{{url('/')}}">Resultados y Desarrollo (Compromisos y Cronogramas)</a>
                                                            </th>  
                                                            <th></th>  
                                                        </tr>
                                                        <tr>
                                                            <th class="row">
                                                                <div>
                                                                    <button class="btn btn-primary"><a href="{{url('/')}}">Calificar</a></button>
                                                                </div>
                                                                
                                                            </th>  
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
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="row">Criterios</th> 
                                                        <th>Calificacion</th>  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="row">Estructura</th> 
                                                        <th><input type="text" name="nombre" id=""></th>  
                                                    </tr>
                                                    <tr>
                                                        <th class="row">Nivel</th> 
                                                        <th><input type="text" name="nombre" id=""></th>   
                                                    </tr>
                                                    <tr>
                                                        <th class="row">Apreciación</th>  
                                                        <th><input type="text" name="nombre" id=""></th>  
                                                    </tr>
                                                    <tr>
                                                        <th class="row">Claridad</th> 
                                                        <th><input type="text" name="nombre" id=""></th>  
                                                    </tr>
                                                    <tr>
                                                        <th class="row">Correlacion</th> 
                                                        <th><input type="text" name="nombre" id=""></th>   
                                                    </tr>
                                                    <tr>
                                                        <th class="row">Promedio</th>  
                                                        <th><input type="text" name="nombre" id=""></th>  
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                
                                        </div>
                                    <h3 style="border: rgb(0, 0, 0);background: rgba(223, 223, 223, 0.589)">Observaciones</h3>
                                    <input style="width: 100%; max-width: 850px; margin: 0 auto; height:70px" type="text" name="nombre" id="">
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
 