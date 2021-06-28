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
   <div class="main container mt-10">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <section class="content">
      <a href="/coordinadores" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>

    <div class="container-fluid">
        <div style="height: 50px">
        </div>  <!-- Info boxes -->
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Criterio</h5><br><br>
                        <h3 class="card-title font-weight-bold" style="text-align: center">Rubrica: {{$rubrica->nombre}}</h3>
                    </div>
                    <!-- /.card-header -->
                      <div class="card-body">
                            <div class="row">
                              <div class="col-md-12">
                                  <!-- contenido de main imagenes -->
                                  <a style="margin: 10px auto;" href="/agregar-criterios/{{$rubrica->id}}" class="btn btn-primary">Agregar</a>

                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            
                                            <tr>
                                                <th scope="col">Aspecto</th>
                                                <th scope="col">Acciones</th>
                                            <tr>
                                        </thead>
                                        @foreach ($criterios as $criterio)
                                            <tr>
                                                <th scope="col"> {{$criterio->descripcion}}</th>                                              
                                                <td>                                                  
                                                <a href="/editar-criterios/{{$criterio->id}}" class="btn btn-info">EDITAR</a>               
                                                    <form action="/borrar-criterios/{{$criterio->id}}" style="display:inline" method="post" >
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
      </div>
    </div>
      
</div> 
@endsection

  
