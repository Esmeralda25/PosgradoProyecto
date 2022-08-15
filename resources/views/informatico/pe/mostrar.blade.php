@extends('layouts.master');

@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/pes')}}" class="nav-link">Inicio</a>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Mostrar Registros</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
            
                                <div class="mb-12">
                                    Programa Educativo : {{$pe->nombre}}<br>
                                </div>
                                <div class="mb-12">
                                    Nombre del coordinador : {{$pe->coordinador}} <br>
                                </div>
                                <div class="mb-12">
                                    Correo del cordianador:{{$pe->correo}} <br>
                                </div>
                                <div class="mb-12">
                                    Docentes :
                                    <ul>   
                                    @forelse ($pe->docentes as $docente)
                                        <li>{{$docente->nombre}} ({{$docente->correo}})</li>
                                    @empty
                                        SIN DOCENTES ASIGNADOS
                                    @endforelse
                                    </ul>
                                </div>
                                <br>
                                <div>
                                    <a href="{{route('programas.index')}}" class="btn btn-warning" tabindex="5">Cancelar</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>      
</section>
@endsection