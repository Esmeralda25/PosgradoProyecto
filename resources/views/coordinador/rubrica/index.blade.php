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

@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
                 <section class="content">
            <div class="container-fluid">
                <div style="height: 50px">
                </div>  <!-- Info boxes -->
                
                    
        
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="text-align: center">
                                <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Rubricas</h5>
            
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-wrench"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a class="dropdown-divider"></a>
                                            <a href="#" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- contenido de main imagenes -->
                                        <div class="container">
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
                                                    <a href="editar-rubricas/{{$rubrica->id}}" class="btn btn-info">EDITAR</a>
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
            </div>
        </section>
        </div>
    </div>
      
</div>

    
@endsection