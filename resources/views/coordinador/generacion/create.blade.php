@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('regresar') 
    <a href="/generaciones" class="nav-link">
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Crear Generaciones</h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->                                    

                                    <form action="/guardar-generaciones" method="POST" enctype="multipart/form-data">
                                    @csrf
                                           
                                    <div class="card-body">
                                    <div class="row form-group col-12">
                                    <label for="" class="row col-12">Nombre</label>
                                    <input type="text" class="row col-12" name="nombre">
                                    </div>

    
                                    <div class="row form-group col-12">
                                    <label for="" class="row col-12">Descripcion</label>
                                    <input type="text" class="row col-12" name="descripcion">
                                    </div>

                                    <div class="row form-group col-12">
                                    <input type="hidden" class="row col-12" name="pes_id" value="{{$pe->id}}">
                                    </div>

                                    
                                            <a href="/generaciones" class="btn btn-danger" tabindex="5">Cancelar</a>
                                            <button type="submit" class="btn btn-warning" tabindex="4">Guardar</button>
                                    </form>
                                    
                                    


                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section> 
        </div>
    </div>
      
</div>
    
@endsection
