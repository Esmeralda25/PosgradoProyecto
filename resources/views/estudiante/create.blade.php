@extends('layouts.plantillabase1');

@section('contenido')
<h2>Crear Registros</h2>

<form action="/addUsuario" method="POST">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="Programa" name="Programa" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido Paterno</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido Materno</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nivel</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>

    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection