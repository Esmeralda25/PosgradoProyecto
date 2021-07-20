@extends('layouts.master');

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

@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center">Rubricas</h1>
                        </div>
                        <div class="mb-3">
                                Titulo de la rubrica : {{$rubrica->nombre}}
                        </div>
                        <div class="mb-3">
                            Tipo de rubrica : {{$rubrica->tipo}}
                        </div>
                        <div class="mb-3">
                            <a href="/rubricas" class="btn btn-warning" tabindex="5">Regresar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>   
</section>
@endsection