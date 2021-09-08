@extends('layouts.master');

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
      <a href="{{url('/pes')}}" class="nav-link">Inicio</a>
</li>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Crear Registros</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">

                        <form action="/pes" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                Programa Educativo
                                <input type="text" name="nombre"  class="form-control" tabindex="2">
                            </div>
                            <div class="mb-3">
                                Nombre del coordinador
                                <input type="text" name="coordinador"  class="form-control" tabindex="3">
                            </div>
                            <div class="mb-3">
                                Correo del cordianador
                                <input type="text" name="correo"  class="form-control" tabindex="3">
                            </div>
                            <div class="mb-3">
                                Contraseña
                                <input type="password" name="password"  class="form-control" tabindex="3">
                            </div>
                            <div class="mb-3">
                                Repita la Contraseña
                                <input  type="password" name="password2"  class="form-control" tabindex="3">
                            </div>

                            <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            
                        </form>
                </div>
            </div>
        </div> 
    </div> 
</section>  

@endsection