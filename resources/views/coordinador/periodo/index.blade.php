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

@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Periodo</h5><br><br>
                        <h3 class="card-title font-weight-bold" style="text-align: center">Generacion: {{$generacion->nombre}}</h3>
                    <!-- /.card-header -->
                      <div class="card-body">
                            <div class="row">
                              <div class="col-md-12">
                                  <!-- contenido de main imagenes -->
                                  <a style="margin: 10px auto;" href="/agregar-periodos/{{$generacion->id}}" class="btn btn-primary">Agregar</a>

                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Fecha de Inicio</th>
                                                <th scope="col">Fecha de Terminación</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Acciones</th>
                                            <tr>
                                        </thead>
                                        @foreach($periodos as $periodo)
                                            <tr>
                                                <th scope="col">{{$periodo->nombre}}</th>
                                                <th scope="col">{{$periodo->fechaInicio}}</th>
                                                <th scope="col">{{$periodo->fechaFin}}</th>
                                                <th scope="col">{{$periodo->estado}}</th>
                                                <td>
                                                   
                                                    {{----}}
                                                    <!-- -->
                                                    <a href="/editar-periodos/{{$periodo->id}}" class="btn btn-info">EDITAR</a>
                                                     <button type="button" class="btn btn-warning"><a href="/estadisticos" style="color: white">Estadisticos</a></button>
                                                     <form action="periodos/{{$periodo->id}}" style="display:inline" method="post" >
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

  



  