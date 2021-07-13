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
@section('regresar') 
    <a href="/coordinadores" class="nav-link">
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
                            
                                    <h3 style="border: rgb(0, 0, 0);background: rgba(223, 223, 223, 0.589)">Rubricas</h3>
                                
                                    <div class="form-group col-md-12">
                                    
                                        <input type="button" id="rubricasid" class="btn btn-primary" value="Rubrica">
                                        <input type="button" id="criteriosid" class="btn btn-primary"   value="Criterio">

                                        <div id="idcontenido">

                                        </div>

                                        <div class="tcontainer">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <table class="table">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="row">Criterios</th> 
                                                        <th>Calificacion</th>  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    
                                                </tbody>
                                            </table>
                                
                                        </div>
                                    <h3 style="border: rgb(0, 0, 0);background: rgba(223, 223, 223, 0.589)">Observaciones</h3>
                                    <input style="width: 100%; max-width: 850px; margin: 0 auto; height:70px" type="text" name="nombre" id="">
                                    
                                    <tr>
                                    <th class="row">
                                    <div>
                                    <button type="submit" class="btn btn-primary" tabindex="4">Calificar</a></button>
                                    </div>                            
                                    </th>           
                                     </tr>
                                     </form>

                                     <script>
                                    var botonRubrica = document.getElementById("rubricasid");
                                    botonRubrica.addEventListener("click",function()){

                                        var icontenido = document.getElementById("idcontenido")
                                        var textotipo = document.getElementById("tipo")
                                        tipo.setAttribute('value','Rubrica')

                                        icontenido.innerHTML = 
                                        /* foreach ($Rubricas as $Rubrica)
                                            {
                                                $innerHTML .= $elem->ownerDocument->saveHTML( $Rubrica );
                                            }
                                        */
                                        
                                        
                                    },false);
                                    </script>
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
 