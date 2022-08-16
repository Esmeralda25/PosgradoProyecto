@extends('layouts.master')

@section('regresar') 
    <a href="/rubricas" class="nav-link">
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
                            <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Lista de criterios</h5><br><br>
                            <h3 class="card-title font-weight-bold" style="text-align: center">Rubrica a modificar: {{$rubrica->nombre}}</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                   <!-- contenido de main imagenes -->
                                  <a style="margin: 10px auto;" href="{{route('criterios.create',$rubrica->id)}}" class="btn btn-primary btn-block">Agregar</a>
                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            <tr>
                                                <th scope="col">Aspecto</th>
                                                <th scope="col">Acciones</th>
                                            <tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($criterios as $criterio)
                                            <tr>
                                                <th scope="col"> {{$criterio->descripcion}}</th>                                              
                                                <td>                                                  
                                                    <a href="{{route('criterios.edit',$criterio->id)}}" class="btn btn-info">EDITAR</a>               
                                                    <form action="{{route('criterios.destroy',$criterio->id)}}" style="display:inline" method="post" >
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                    </form>                           
                                                </td>                                     
                                            <tr>                                 
                                            @endforeach       
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

  
