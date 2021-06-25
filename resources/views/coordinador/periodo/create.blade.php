@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

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
                        <h5 class="card-title font-weight-bold" style="text-align: center">Agregar Periodo</h5><br><br>
                        <h3 class="card-title font-weight-bold" style="text-align: center">Generacion: {{$generacion->nombre}}</h3>
    
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
                                <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                <div class="container">
                                    

                                    <form action="/guardar-periodos" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <input type="hidden" name="generacion_id" value="{{$generacion->id}}">       

                                            <div class="card-body">
                                            <div class="row form-group col-12">
                                            <label for="" class="row col-12">Nombre</label>
                                            <input type="text" class="row col-12" name="nombre">
                                            </div>
                            
                                            <label for="" class="row col-12">Fecha Inicio</label>
                                            <input type="date" placeholder="" name="fechaInicio" class="form-control" style="width: 300px">
                                        
        
                                            <label for="" class="row col-12">Fecha Fin</label>
                                            <input type="date" placeholder="" name="fechaFin" class="form-control" style="width: 300px">

                                            <label for="" class="row col-12">Rubrica</label>

                                            <select name="rubrica">
                                                @foreach ($rubricas as $rubrica)
                                                <option value="{{$rubrica->id}}">{{$rubrica->nombre}}</option>
                                                    
                                                @endforeach
                                            </select>

                                            </div> 
                                    
                                            <a href="/periodos/{{$generacion->id}}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
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
    </div>
  </div>
      
</div>
  
   
@endsection
