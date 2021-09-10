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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Agregar Rubricas</h1>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- contenido de main imagenes -->
                                            <a style="margin: 10px auto;" href="{{url('/agregar-rubricas')}}" class="btn btn-primary">Agregar</a>
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                            
                                                    <tr> 
                                                        <th scope="col">Titulo</th>
                                                        <th scope="col">Tipo</th>
                                                        <th scope="col">Acciones</th>
                                                    <tr>
                                                </thead>
                                                @foreach($rubricas as $rubrica) 
                                                <tr>
                                                    <th scope="col">{{$rubrica->nombre}}</th>
                                                    <th scope="col">{{$rubrica->tipo}}</th>
                                                    <td>
                                                    <a href="editar-rubricas/{{$rubrica->id}}" class="btn btn-success">EDITAR</a>
                                                    <a href="criterios/{{$rubrica->id}}" class="btn btn-info">CRITERIOS</a>
                                                     <button type="button" class="btn btn-warning"><a href="mostrar-rubricas/{{$rubrica->id}}" style="color: white">Mostrar</a></button>
                                                     <form action="rubricas/{{$rubrica->id}}" style="display:inline" method="post" >
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