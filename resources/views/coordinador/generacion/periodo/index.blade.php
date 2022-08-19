@extends('layouts.master')
@section('content')
        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="font-size: 35px;">Agregar Periodo</h5><br><br>
                        <h3 class="card-title font-weight-bold" >Generacion: {{$generacion->nombre}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route('periodos.create',$generacion->id)}}" class="btn btn-primary btn-block">Agregar</a>
                                <table class="table table-striped mt-4">
                                    <thead class="table table-dark">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Fecha de Inicio</th>
                                            <th scope="col">Fecha de Terminación</th>
                                            <th scope="col">Inscritos</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Acciones</th>
                                        <tr>
                                    </thead>
                                    <tbody>
                                    @foreach($generacion->periodos as $periodo)
                                        <tr>
                                            <td scope="col">{{$periodo->nombre}}</td>
                                            <td scope="col">{{$periodo->fechaInicio}}</td>
                                            <td scope="col">{{$periodo->fechaFin}}</td>
                                            <td scope="col">{{$periodo->inscritos()}}</td>
                                            <td scope="col">{{$periodo->estado}}</td>
                                            <td>
                                                <a href="{{route('periodos.edit',$periodo->id)}}" class="btn btn-info">EDITAR</a>
                                                <a href="/estadisticos" class="btn btn-warning" style="color: white">ESTADISTICOS</a>
                                                <form action="{{route('periodos.destroy',$periodo->id)}}" style="display:inline" method="post" >
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                </form> 
                                                @if ($loop->iteration == 1)
                                                    <button class="btn btn-success text-white">
                                                        inscribir
                                                    </button>
                                                    <button class="btn btn-primary text-white">
                                                        batch
                                                    </button>
                                                @else
                                                    <button class="btn btn-success text-white">
                                                        inscribir (cambios)
                                                    </button>
                                                    <button class="btn btn-primary text-white">
                                                        re inscribir
                                                    </button>
                                                @endif
                                            </td>
                                        <tr> 
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('generaciones.index')}}" class="btn btn-primary btn-block">Listar generaciones</a>

                            </div>
                        </div><!-- row -->
                    </div><!-- card body -->
                </div><!-- card -->
            </div><!-- col10 -->
        </div><!-- row -->
@endsection

  



  