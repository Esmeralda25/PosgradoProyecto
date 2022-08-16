@extends('layouts.master')

@section('regresar') 
    <a href="/generaciones" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('inicio')}}" class="nav-link" >Inicio</a>
</li>
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
                        <h5 class="card-title font-weight-bold" style="font-size: 35px;">Agregar Periodo</h5><br><br>
                        <h3 class="card-title font-weight-bold" >Generacion: {{$generacion->nombre}}</h3>
                    </div>
                    <!-- /.card-header -->
                      <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                  <!-- contenido de main imagenes -->
                                  @if (session('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('message')}}
                                        </div> 
                                     @endif
                                     @if (session('mensaje'))
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('mensaje')}}
                                        </div> 
                                     @endif
                                     @if (session('borrar'))
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('borrar')}}
                                        </div> 
                                     @endif
                                     @if (session('nborrar'))
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('nborrar')}}
                                        </div> 
                                     @endif
                                  <a href="/agregar-periodos/{{$generacion->id}}" class="btn btn-primary btn-block">Agregar</a>

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
                                                     <button type="button" class="btn btn-warning"><a href="/estadisticos" style="color: white">ESTADISTICOS</a></button>
                                                     <form action="/borrar-periodos/{{$periodo->id}}" style="display:inline" method="post" >
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

  



  