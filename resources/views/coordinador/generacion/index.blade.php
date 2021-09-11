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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Agregar Generaciones</h1>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                    @if (session('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('message')}}
                                        </div> 
                                     @endif
                                     @if (session('mensaje'))
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('mensaje')}}
                                        </div> 
                                     @endif
                                     @if (session('borrar'))
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('borrar')}}
                                        </div> 
                                     @endif
                                     @if (session('nborrar'))
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Aviso!,</strong> {{Session::get('nborrar')}}
                                        </div> 
                                     @endif
                                
                                        <!-- contenido de main imagenes -->
                                            <a style="margin: 10px auto;" href="{{url('/agregar-generaciones')}}" class="btn btn-primary btn-block">Agregar</a>
                                    
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                            
                                                    <tr>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Descripcion</th>
                                                        <th scope="col">Acciones</th>
                                                    <tr> 
                                                </thead>
                                                @foreach($generaciones as $generacion) 
                                                <tr> 
                                            
                                                    <th scope="col">{{$generacion->nombre}}</th>
                                                    <th scope="col">{{$generacion->descripcion}}</th>

                                                    <td>
                                                    <a href="editar-generaciones/{{$generacion->id}}" class="btn btn-info">EDITAR</a>
                                                     <button type="button" class="btn btn-warning"><a href="periodos/{{$generacion->id}}" style="color: white">PERIODOS</a></button>
                                                     
                                                     <form action="eliminar-generaciones/{{$generacion->id}}" style="display:inline" method="post" >
                                                     @csrf
                                                    @method('delete')
                                                    <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                </form> 
                                                    </td>
                                                        </th>
                                                        <tr> 
                                                @endforeach
                                            
                                                <tbody>                                               
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>      
</section>
@endsection

