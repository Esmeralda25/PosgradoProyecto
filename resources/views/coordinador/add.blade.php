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
  <a href="/coordinadores" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>
    <div class="container-fluid">
          <!-- Info boxes -->
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Usuario</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- contenido de main imagenes -->
                                <div class="container">
                                    <a href="{{url('/agregar')}}" class="btn btn-primary">Agregar</a>
                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Nivel</th>
                                                <th scope="col">Acciones</th>
                                            <tr> 
                                        </thead>
                                     {{-- prueba 1 de commit and push --}}


                                
                                     <tbody>
                                     @foreach($usuarios as $usuario)
                                            <tr>
                                            
                                                    <th scope="col">{{$usuario->nombre}}</th>
                                                    <th scope="col">{{$usuario->nivel }}</th>
                                        
                                                    <td>
                                                    <a href="editar-usuarios/{{$usuario->nivel }}/{{$usuario->id}}" class="btn btn-info">EDITAR</a>
                                                    <a href="editar-contraseñas/{{$usuario->nivel }}/{{$usuario->id}}" class="btn btn-warning">CONTRASEÑA</a>
                                                    <form action="coordinador/{{$usuario->id}}" style="display:inline" method="post" >
                                                    @csrf
                                                    @method('delete')
                                                    
                                                    <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                    </form>
                                                    </td>
                                                    </tr>
                                    
                                                    @endforeach
                                           
                                            </tbody>
                                    </table>
                            
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




    
          
    
        
 