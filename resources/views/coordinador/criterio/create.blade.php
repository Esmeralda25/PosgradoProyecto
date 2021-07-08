@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i class="fas fa-users nav-icon"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link" >Inicio</a>

</li>
@endsection
@section('regresar') 
    <a href="/coordinadores" class="nav-link">
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Crear Criterios</h1>
                            <h3 class="card-title font-weight-bold" style="text-align: center">Rubrica</h3><br>
                        </div>
                        <form action="/guardar-criterios" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Descripcion</label>
                                <input name="descripcion" type="text" class="form-control" tabindex="2">
                            </div>
                            <div class="mb-3">
                                <input name="Rubricas_id" type="hidden" class="form-control" tabindex="2" value="{{$rubrica->id}}">
                            </div>
                            
                            
                            <a href="/criterios" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection