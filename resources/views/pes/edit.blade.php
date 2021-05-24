@extends('layouts.master');

@section('content')

<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
                            
            <h2>Crear Registros</h2>

            <form action="/pes/{​​{​​$pe->id}​​}​​" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input name="coordinador" type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Apellido Paterno</label>
                    <input name="coordinador" type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Apellido Materno</label>
                    <input name="coordinador" type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Coordinador</label>
                    <input name="correo" type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input name="password" type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="nombre" type="text" class="form-control" tabindex="3">
                </div>

                <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            </form>
        </div>
    </div>
        
</div>


@endsection