@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="{{route('entrada.salida')}}">
        <li class="nav-item"> 
            @csrf
            <a href="{{route('entrada.salida')}}" class="nav-link"> 
            <i class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('regresar') 
    <a href="/coordinadores" class="nav-link">
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
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Usuario</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                     @if (session('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('message')}}
                                        </div> 
                                     @endif
                                     @if (session('sborrae'))
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('sborrae')}}
                                        </div> 
                                     @endif
                                     @if (session('nborrae'))
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Aviso!,</strong> {{Session::get('nborrae')}}
                                        </div> 
                                     @endif
                                     @if (session('sborrad'))
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('sborrad')}}
                                        </div> 
                                     @endif
                                     @if (session('nborrad'))
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Aviso!,</strong> {{Session::get('nborrad')}}
                                        </div> 
                                     @endif
                                     @if (session('editar'))
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('editar')}}
                                        </div> 
                                     @endif
                                     @if (session('mensaje'))
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('mensaje')}}
                                        </div> 
                                     @endif
                                <!-- contenido de main imagenes -->
                                <div class="container">
                                    <a href="{{url('/agregar-usuarios')}}" class="btn btn-primary btn-block">Agregar</a>
                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Nivel</th>
                                                <th scope="col">Acciones</th>
                                            <tr> 
                                        </thead>
                                     <tbody>
                                     @foreach($usuarios as $usuario)
                                            <tr>
                                            
                                                    <th scope="col">{{$usuario->nombre}}</th>
                                                    <th scope="col">{{$usuario->nivel }}</th>
                                        
                                                    <td>
                                                    <a href="editar-usuarios/{{$usuario->nivel }}/{{$usuario->id}}" class="btn btn-info">EDITAR</a>
                                                    <a href="editar-contraseñas/{{$usuario->nivel }}/{{$usuario->id}}" class="btn btn-warning">CONTRASEÑA</a>
                                                    <form action="eliminar-usuarios/{{$usuario->nivel }}/{{$usuario->id}}" style="display:inline" method="post" >
                                                    @csrf
                                                    @method('delete')
                                                    
                                                    <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                    </form>
                                                    </td>
                                                    </tr>
                                    
                                                    @endforeach
                                           
                                            </tbody>
                                    </table>
                                    <br>
                                    {{$usuarios->links()}}
                            
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




    
          
    
        
 