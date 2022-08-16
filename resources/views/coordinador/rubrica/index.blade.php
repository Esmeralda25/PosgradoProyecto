@extends('layouts.master')

@section('regresar') 
    <a href="{{route('inicio')}}" class="nav-link">
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
                                            <a style="margin: 10px auto;" href="{{route('rubricas.create')}}" class="btn btn-primary btn-block">Agregar</a>
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
                                                    <a href="{{route('rubricas.edit',$rubrica->id)}}" class="btn btn-success">EDITAR</a>
                                                    <a href="{{route('criterios.index',$rubrica->id)}}" class="btn btn-info">CRITERIOS</a>
                                                    <a href="{{route('rubricas.show',$rubrica->id)}}" class="btn btn-warning" style="color:white">MOSTRAR</a>
                                                    <form action="{{route('rubricas.destroy',$rubrica->id)}}" style="display:inline" method="post" >
                                                     @csrf
                                                    @method('delete')
                                                    <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                </form> 
                                                    </td
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