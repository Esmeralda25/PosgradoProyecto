@extends('layouts.master');

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