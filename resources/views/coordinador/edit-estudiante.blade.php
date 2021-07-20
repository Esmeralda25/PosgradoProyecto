@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link" >Inicio</a>

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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Datos</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                                    <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                    <div class="container">
                                        <form action="/actualizar-usuarios/Estudiante/{{$estudiante->id}}" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre</label>
                                                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$estudiante->nombre}}">
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Correo</label>
                                                    <input id="correo" name="correo" type="text" class="form-control" tabindex="3" value="{{$estudiante->correo}}">
                                                </div>
                                       
                                                <a href="/usuarios" class="btn btn-danger" tabindex="5">Cancelar</a>
                                                <input type="submit" value="Guardar" class="btn btn-warning">
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




    
          
  




  


