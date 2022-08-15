@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('regresar') 
    <a href="/listar-usuarios" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('coordinadores')}}" class="nav-link" >Inicio</a>
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
                        <h1 class="card-title font-weight-bold" style="text-align: center">Nuevo docente</h1>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- contenido de main imagenes -->
                                <form action="{{route('docentes.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nombre</label>
                                        <input id="nombre" name="nombre" type="text" style="width: 100%" value="{{old('nombre')}}">
                                    </div>
                                    <!--
                                    <div class="mb-3 form-group" style="margin-top: 10px;">
                                        <label for="nivel"  style="margin-top: 10px;">Tipo</label>
                                        <select name="nivel" id="nivel">
                                            <option value="Docente">Docente</option>
                                            <option value="Estudiante">Estudiante</option>
                                        </select>                
                                    </div> 
                                    -->
                                    <div class="mb-3">
                                        <label for="" class="form-label">Correo</label>
                                        <input id="correo" name="correo" type="text" style="width: 100%" value="{{old('correo')}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Contraseña</label>
                                        <input id="password" name="password" type="password" style="width: 100%">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Confirmar contraseña</label>
                                        <input id="password_confirmation" name="password_confirmation" type="password" style="width: 100%">
                                    </div>
                                    <a href="{{route('coordinadores')}}" class="btn btn-danger" "5">Cancelar</a>
                                    <button type="submit" class="btn btn-warning" "4"><a>Guardar</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> 
  
@endsection




    
          
  