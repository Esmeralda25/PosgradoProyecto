@extends('layouts.master')

@section('titulo')
  {{ \Session::get('usuario')->coordinador}}
@endsection
@section('submenu')
<li class="nav-item">
    <a href="/usuarios" class="nav-link active far fa-circle nav-icon">usuarios</a></li>
<li class="nav-item"> 
    <a href="/generaciones" class="nav-link active far fa-circle nav-icon">genearciones</a>
</li>    

<!--OPCION DEL MENU PARA SALIR DE SESION -->      
        <li class="nav-item"> 
            <form action="/logout">
                @csrf
                <a href="/logout" class="nav-link far fa-circle nav-icon">Cerrar Sesión</a>
            </form>  
        </li>    
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
            <a href="/coordinadores" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>

                <div style="height: 5px">
                </div>  <!-- Info boxes -->
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="text-align: center">
                                <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Generaciones</h5>           
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- contenido de main imagenes -->
                                        <div class="container">
                                            <a style="margin: 10px auto;" href="{{url('/agregarGeneraciones')}}" class="btn btn-primary">Agregar</a>
                                    
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
                                                    <a href="editarGeneraciones/{{$generacion->id}}" class="btn btn-info">EDITAR</a>
                                                     <button type="button" class="btn btn-warning"><a href="periodos/{{$generacion->id}}" style="color: white">Periodos</a></button>
                                                     
                                                     <form action="generaciones/{{$generacion->id}}" style="display:inline" method="post" >
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
            </div>
        </section>
        </div>
    </div>
      
</div>

    
@endsection

