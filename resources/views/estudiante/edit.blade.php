@extends('layouts.master')

@section('titulo')
  <p>Estudiante</p>

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
      <a href="{{url('/estudiantes')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')
    <section class="content">
    <div class="container-fluid">
        <div style="height: 50px">
        </div>  <!-- Info boxes -->
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center">Crear Registros</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                <form action="/pes/{​​{​​$pe->id}​​}​​" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="mb-3">
                                            <label for="" class="form-label">Estudiante</label>
                                            <input name="coordinador" type="text" class="form-control" tabindex="3">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Correo</label>
                                            <input name="correo" type="text" class="form-control" tabindex="3">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">password</label>
                                            <input name="password" type="text" class="form-control" tabindex="3">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">nombre</label>
                                            <input name="nombre" type="text" class="form-control" tabindex="3">
                                        </div>
                        
                                        <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                                </form>


                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section>
@endsection




  


