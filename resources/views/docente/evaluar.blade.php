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
            <i class="fas fa-users nav-icon"></i>    
        </a>
         </li>    
    </form>   
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
                      <h2 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Estudiante: {{$proyecto->estudiante->nombre}}</h2>
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
                                                        <h5> Datos Generales del Proyecto: </h5>
                                                            <th class="row">
            
                                                   
                                                                Titulo: {{$proyecto->titulo}}<br>
                                                                Hipotesis: {{$proyecto->hipotesis}}<br>
                                                                Objetivos: {{$proyecto->objetivos}}<br>
                                                                Objetivos Especificos: {{$proyecto->objetivose}}<br>
                                                        
                                                            </th> 
                                                            <th></th>  
                                                        </tr>
                                                        <tr>
                                                            <th class="row">
                                                                <a>Protocolo Entregado</a>
                                                            </th> 
                                                            <th></th>   
                                                        </tr>
                                                        <tr>
                                                            <th class="row">
                                                                <a>Resultados y Desarrollo (Compromisos y Cronogramas)</a>
                                                            </th>  
                                                            <th></th>  
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                        
                                            </div>
                                        </div>
                                    </div>
                            
                                    <h3 style="border: rgb(0, 0, 0);background: rgba(223, 223, 223, 0.589)">Rubrica</h3>
                                    <h5>{{$proyecto->periodo->rubricaAUsar->nombre}}</h5>
                                    <div class="form-group col-md-12">
                                
                                        <div id="idcontenido">

                                        </div>

                                        <div class="tcontainer">
                                        <form action="/guardar-calificaciones" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <table class="table">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="row">CRITERIOS A EVALUAR</th> 
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <th>@foreach($relaciones as $relacion)<br><br>
                                                
                                                     {{$relacion->descripcion}}
                                                
                                            
                                                     @if($proyecto->periodo->rubricaAUsar->tipo == "Numerica")
                                                             <select name="calificacion[{{$loop->index}}]">
                                                             <option value="0">0</option>
                                                             <option value="70">70</option>
                                                             <option value="80">80</option>
                                                             <option value="90">90</option>
                                                             <option value="100">100</option> 
                                                             </select>    

                                                             
                                                            
                                                        @endif

                                                        @if($proyecto->periodo->rubricaAUsar->tipo == "Alfanumerica")
                                                             <select name="calificacion[{{$loop->index}}]">
                                                             <option value="0">No aceptable</option>
                                                             <option value="70">Regular</option>
                                                             <option value="80">Bien</option>
                                                             <option value="90">Muy Bien</option>
                                                             <option value="100 ">Excelente</option> 
                                                             </select>        
                                                        @endif

                                                    
                                                            
                                                        @endforeach

                                
                                            </th>

                                            
                                                </tbody>
                                              

                                            </table>
                                            <div class="mb-3">
                                            <input name="proyectos_id" type="hidden" class="form-control" tabindex="2" value="{{$proyecto->id}}">
                                            </div>
                                        </div>
                                    <h3 style="border: rgb(0, 0, 0);background: rgba(223, 223, 223, 0.589)">Observaciones</h3>
                                    <input style="width: 100%; max-width: 850px; margin: 0 auto; height:70px" type="text" name="observaciones" id="">

                                    <label for="" class="row col-12">Fecha De Evaluación</label>
                                    <input type="date" placeholder="" name="fecha" class="form-control" style="width: 300px"><br>
                                    
                                    <tr>
                                    <th class="row">
                                    <div>
                                    <button type="submit" class="btn btn-primary" tabindex="4">Calificar</a></button>
                                    </div>                            
                                    </th>           
                                     </tr>
                                     </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
 