@extends('layouts.master')

@section('titulo')
  <p>Docente</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/coordinador')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
   <div class="main container mt-10">
       <div class="row justify-content-center">
           <div class="col-md-10">
             <section class="content">
    <div class="container-fluid">
        <div style="height: 50px">
        </div>  <!-- Info boxes -->
          
            
  
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                      <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Pagina Principal Docente</h5>
    
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>

                            <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-wrench"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a class="dropdown-divider"></a>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
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
 