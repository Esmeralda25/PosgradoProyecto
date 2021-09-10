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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Asignar Avance</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- contenido de main imagenes -->
                                    <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                    <div class="container">
                                        

                                        <form action="/guardar-porcentajes" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                                <div class="mb-3 form-group">
                                                <label for="" class="form-label">Avance (En porcentaje %)</label><br>
                                                <input id="nombre" name="avance" type="text" class="form-control" tabindex="2">
                                                    </select>
                    
                                                </div> 
                                        
                                                <a href="/rubricas" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                                <button type="submit" class="btn btn-primary" tabindex="4"><a>Guardar</a></button>
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
