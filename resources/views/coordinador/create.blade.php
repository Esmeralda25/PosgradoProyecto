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
<div class="mmt-10 align-content-center">
        <section class="content">
        <a href="/usuarios" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>
        <div class="container-fluid">
            <div style="height: 5px">
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
                                    <div class="container">
                                        

                                        <form action="/add" method="POST" enctype="multipart/form-data">
                                        @csrf
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre</label>
                                                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
                                                </div>
                                            
                                                <div class="mb-3 form-group">
                                                    <label for="nivel">Nivel</label>
                                                    <select name="nivel" id="nivel">
                                                        <option value="Docente">Docente</option>
                                                        <option value="Estudiante">Estudiante</option>
                                                    </select>
                    
                                                </div> 
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Correo</label>
                                                    <input id="correo" name="correo" type="text" class="form-control" tabindex="3">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Contraseña</label>
                                                    <input id="password" name="password" type="text" class="form-control" tabindex="3">
                                                </div>
                                        
                                                <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
</div>
   
@endsection




    
          
  