@extends('layouts.master');

@section('regresar') 
    <a href="/rubricas" class="nav-link">
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
x
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
                             Criterios a considerar:
                             <ul>
                             @forelse ($rubrica->criterios as $criterio)
                                 <li>{{$criterio->descripcion}}</li>
                             @empty
                                 SIN CRITERIOS
                             @endforelse
                            </ul>

                        </div>

                        <div class="mb-3">
                            <a href="{{route('rubricas.index')}}" class="btn btn-warning" tabindex="5">Regresar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>   
</section>
@endsection