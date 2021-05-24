@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/estudiante')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
   <div class="main container mt-10">
     <div class="row justify-content-center">
       <div class="col-md-10">
          <!-- Main content -->
    <section class="content" style="padding-top: 10px">
      <div>
        <div class="main container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-5">
                    
                    <div class="card">
                            <form action="" method="POST">
                                <div class="card-header text-center font-weight-bold" style="font-size: 30px">Reportar</div>
        
    
                                    <div class="container">
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
                                        <table class="table table-striped col-12" style="100%">
                                            <thead>
                                                <tr>
                                                    <div style="height: 10px">
                                                        <!-- espacio entre contenido-->
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <h2 style="text-align: center; background:black">Compromisos Adquiridos</h2>
                                                </tr>
                                                <tr class="table-dark" style="background: rgba(0, 0, 0, 0.692)">
                                                    <th scope="col">Compromisos</th>
                                                    <th scope="col">Programado</th>
                                                    <th scope="col">Realizado</th>
                                                    <th scope="col">Evidencias</th>
                                                </tr>
                                                <tr>
                                                    <th>Articulos JCR sometidos</th>
                                                    <td><input type="text" placeholder="2" name="nombre" class="form-control"></td>
                                                    <td><input type="text" name="nombre" class="form-control"></td>
                                                    <td style="padding: 5px">
                                                        <button>Seleccionar archihvo..</button>
                                                        <button>Seleccionar archihvo..</button>
                                                    </td> <!-- este buttom es un ejemplo, se hace con jquery-->
                                                </tr>
                                                <tr>
                                                    <th>Articulos JCR aceptados</th>
                                                    <td><input type="text" placeholder="1" name="nombre" class="form-control"></td>
                                                    <td><input type="text" name="nombre" class="form-control"></td>
                                                    <td style="padding: 5px">
                                                        <button>Seleccionar archihvo..</button>
                                                        
                                                    </td> <!-- este buttom es un ejemplo, se hace con jquery-->
                                                </tr>
                                                <tr>
                                                    <th>Conferencias Nacionales</th>
                                                    <td><input type="text" placeholder="2" name="nombre" class="form-control"></td>
                                                    <td><input type="text" name="nombre" class="form-control"></td>
                                                    <td style="padding: 5px; heigth:15px" >
                                                        <button>Seleccionar archihvo..</button>
                                                        <button>Seleccionar archihvo..</button>
                                                        <button>Seleccionar archihvo..</button>
                                                    </td> <!-- este buttom es un ejemplo, se hace con jquery-->
                                                </tr>
                                            </thead>
                                        </table>
        
                                        <div>
                                            <button class="btn btn-danger"><a href="{{url('/reportar')}}" onclick="alerta()" style="color: black">Reportar</a></button>
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
     </div>
    
   </div>
@endsection  
   
