@extends('layouts.master');

@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('programas.index')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-12">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center">Crear Registros</h1>
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
                            <div >
                            <form action="{{route('programas.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="mb-12">
                                    Programa Educativo
                                    <input type="text" name="nombre" style="width: 100%" value="{{old('nombre')}}">
                                </div>
                                <div class="mb-12">
                                    Nombre del coordinador
                                    <input type="text" name="coordinador" style="width: 100%" value="{{old('coordinador')}}">
                                </div>
                                <div class="mb-12">
                                    Correo del cordianador
                                    <input type="text" name="correo" style="width: 100%" value="{{old('correo')}}">
                                </div>
                                <div class="mb-12">
                                    Contraseña
                                    <input type="password" name="password" style="width: 100%" >
                                </div>
                                <div class="mb-12">
                                    Repita la Contraseña
                                    <input  type="password" name="password_confirmation" style="width: 100%"">
                                </div>

                                <a href="{{route('programas.index')}}" class="btn btn-danger" tabindex="5">Cancelar</a>
                                <input type="submit" value="Guardar" class="btn btn-warning">
                                
                            </form>
                </div>
            </div>
        </div> 
    </div> 
</section>  

@endsection