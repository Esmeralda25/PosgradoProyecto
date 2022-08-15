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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Registros</h1>
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
                                    <!--<input id="coordinador" name="coordinador" type="text"> -->
                                    
                                        <form action="{{route('docentes.update',$docente->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nombre</label>
                                                <input id="nombre" name="nombre" type="text" style="width: 100%" value="{{$docente->nombre}}">
                                            </div>                                        
                                            <div class="mb-3">
                                                <label for="" class="form-label">Correo</label>
                                                <input id="correo" name="correo" type="text" style="width: 100%" value="{{$docente->correo}}">
                                            </div>
                                            <div class="mb-12">
                                                Contraseña
                                                <input type="password" name="password" style="width: 100%">
                                                Repita la Contraseña
                                                <input  type="password" name="password_confirmation" style="width: 100%">
                                                SI NO DESEA MODIFICAR DEJE EN LIMPIO
                                            </div>
                                                        
                                            <a href="{{route('docentes.index')}}" class="btn btn-danger">Cancelar</a>
                                            <input type="submit" value="Guardar" class="btn btn-warning">
                                        </form>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
    </section> 
@endsection




    
          
  




  


