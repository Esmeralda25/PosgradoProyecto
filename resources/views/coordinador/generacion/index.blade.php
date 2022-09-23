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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Generaciones del programa</h1>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">                                
                                        <!-- contenido de main imagenes -->
                                            <a style="margin: 10px auto;" href="{{route('generaciones.create')}}" class="btn btn-primary btn-block">Agregar</a>
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                                    <tr>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Descripcion</th>
                                                        <th scope="col">Acciones</th>
                                                    <tr> 
                                                </thead>
                                                <tbody>
                                                    @foreach($generaciones as $generacion) 
                                                    <tr> 
                                                        <td scope="col">{{$generacion->nombre}}</td>
                                                        <td scope="col">{{$generacion->descripcion}}</td>
                                                        <td>
                                                            <a href="{{route('generaciones.estadisticos',$generacion->id)}}" class="btn btn-success">ESTADISTICOS</a>
                                                            <a href="{{route('generaciones.edit',$generacion->id)}}" class="btn btn-info">EDITAR</a>
                                                            <a href="{{route('periodos.index',$generacion->id)}}" class="btn btn-warning" style="color: white">PERIODOS</a>                                                     
                                                            <form action="{{route('generaciones.destroy',$generacion->id)}}" style="display:inline" method="post" >
                                                                @csrf
                                                                @method('delete')
                                                                <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                            </form> 
                                                        </td>
                                                    <tr> 
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <br>
                                            {{$generaciones->links()}}
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>      
</section>
@endsection

