@extends('layouts.master');

@section('content')

<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
                            
            <h2>editar Registros</h2>
            
            
                    <div class="mb-3">
                        Programa Educativo : {{$pe->nombre}}
                    </div>
                    <div class="mb-3">
                        Nombre del coordinador : {{$pe->coordinador}}
                    </div>
                    <div class="mb-3">
                        Correo del cordianador:{{$pe->correo}}
                    </div>
                    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
        </div>
    </div>
        
</div>


@endsection