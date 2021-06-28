@extends('layouts.master');
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link active far fa-circle nav-icon">Cerrar Sesión</a>
        </li>    
    </form>
    
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')

<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
                            
            <h2>Rubricas</h2>
                <div class="mb-3">
                        Titulo de la rubrica : {{$rubrica->nombre}}
                    </div>
                    <div class="mb-3">
                        Tipo de rubrica : {{$rubrica->tipo}}
                    </div>
                
                    <a href="/rubricas" class="btn btn-secondary" tabindex="5">Regresar</a>
        </div>
    </div>
        
</div>


@endsection