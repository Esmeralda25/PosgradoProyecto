@extends('layouts.master')

@section('regresar') 
    <a href="/rubricas" class="nav-link">
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Crear Rubrica</h1>
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
                                    <!--<input id="coordinador" name="coordinador" type="text" style="width: 100%"> -->
                                    
                                        <form action="{{route('rubricas.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <input type="hidden" name="pe_id" value="{{$pe_id}}">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Titulo</label>
                                                    <input id="nombre" name="nombre" type="text" style="width: 100%" value="{{old("nombre")}}">
                                                </div>
                                            
                                                <div class="mb-3 form-group">
                                                    <label for="tipo">Tipo</label>
                                                    <select name="tipo" id="tipo">
                                                        <option value="Numerica">Numericas</option>
                                                        <option value="Alfanumerica">Alfanumerica</option>
                                                    </select>
                    
                                                </div> 
                                        
                                                <a href="{{route('rubricas.index')}}" class="btn btn-danger" tabindex="5">Cancelar</a>
                                                <button type="submit" class="btn btn-warning" tabindex="4"><a>Guardar</a></button>
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
