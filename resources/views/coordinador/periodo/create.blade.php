@extends('layouts.master')

@section('titulo')
  <p></p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="{{route('entrada.salida')}}">
        <li class="nav-item"> 
            @csrf
            <a href="{{route('entrada.salida')}}" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('regresar') 
    <a href="/periodos/{{$generacion->id}}" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link" >Inicio</a>
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
                        <h5 class="card-title font-weight-bold" style="text-align: center">Agregar Periodo</h5><br>
                        <h3 class="card-title font-weight-bold" style="text-align: center">Generacion: {{$generacion->nombre}}</h3>                       
                   </div> <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                @if ($rubricas->count()==0)
                                 No existen rubricas para este programa educativo.
                                 Por favor, agregalas.
                                 <a href="/rubricas" class="btn btn-warning" tabindex="5">Rubricas</a><br>
                                @endif

                                @if ($rubricas->count())
                                    <form action="/guardar-periodos" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <input type="hidden" name="generacion_id" value="{{$generacion->id}}">       
                                            <div class="card-body">
                                                <div class="row form-group col-12">
                                                    <label for="" class="row col-12">Nombre</label>
                                                    <input type="text" class="row col-12" name="nombre">
                                                </div>
                                                <div class="row form-group col-12">                            
                                                    <label for="" class="row col-12">Fecha Inicio</label>
                                                    <input type="date" placeholder="" name="fechaInicio" class="form-control" style="width: 300px">
                                            </div>
                                            <div class="row form-group col-12">                            
                                                <label for="" class="row col-12">Fecha Fin</label>
                                                <input type="date" placeholder="" name="fechaFin" class="form-control" style="width: 300px">    
                                            </div>
        
                                            {{--
    <label for="" class="row col-12">Rubrica</label>
    <select name="rubrica">
        @foreach ($rubricas as $rubrica)
        <option value="{{$rubrica->id}}">{{$rubrica->nombre}}</option>
        
        @endforeach
    </select>
    --}}
                                            </div>
                                            <a href="/periodos/{{$generacion->id}}" class="btn btn-danger" tabindex="5">Cancelar</a>
                                            <button type="submit" class="btn btn-warning" tabindex="4">Guardar</button>
                                    </form>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
