@extends('layouts.master')
@section('content')
  <section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar docente</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <!-- contenido de main imagenes -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{route('docentes.create')}}" class="btn btn-primary" style="width:100%">Agregar docentes nuevos</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{route('docentes.create')}}" class="btn btn-primary" style="width:100%">asignar docentes existentes</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table class="table table-dark table-striped mt-4">
                                            <thead class="table table-dark table-striped mt-4">
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Acciones</th>
                                                <tr> 
                                            </thead>
                                            <tbody>
                                            @foreach($usuarios as $usuario)
                                                <tr>
                                                    <th scope="col">{{$usuario->nombre}}</th>
                                                    <td>
                                                        <a href="{{route('docentes.edit',$usuario->id)}}" class="btn btn-info">EDITAR</a>
                                                        <!--
                                                            <a href="editar-contraseñas/{{$usuario->nivel }}/{{$usuario->id}}" class="btn btn-warning">CONTRASEÑA</a>
                                                        -->
                                                        <form action="{{route('docentes.destroy',$usuario->id)}}" style="display:inline" method="post" >
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
                                    <div class="row">
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
    </div>
</section>
</div>
    
@endsection




    
          
    
        
 