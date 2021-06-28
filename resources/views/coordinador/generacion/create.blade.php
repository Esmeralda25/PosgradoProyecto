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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
           <section class="content">
    <div class="container-fluid">
    <a href="/generaciones" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>

        <div style="height: 5px">
        </div>  <!-- Info boxes -->
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center">Agregar Generacion</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                <div class="container">
                                    

                                    <form action="/guardarGeneraciones" method="POST" enctype="multipart/form-data">
                                    @csrf
                                           
                                    <div class="card-body">
                                    <div class="row form-group col-12">
                                    <label for="" class="row col-12">Nombre</label>
                                    <input type="text" class="row col-12" name="nombre">
                                    </div>

    
                                    <div class="row form-group col-12">
                                    <label for="" class="row col-12">Descripcion</label>
                                    <input type="text" class="row col-12" name="descripcion">
                                    </div>

                                    <div class="row form-group col-12">
                                    <input type="hidden" class="row col-12" name="pes_id" value="{{$pe->id}}">
                                    </div>

                                    
                                            <a href="/coordinador" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
