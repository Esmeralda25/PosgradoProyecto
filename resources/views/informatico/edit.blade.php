@extends('layouts.plantillabase');

@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link active far fa-circle nav-icon">Cerrar Sesión</a>
        </li>    
    </form>
    
@endsection
@section('contenido')
<h2>Crear Registros</h2>

<form action="/pes/{​​{​​$pe->id}​​}​​" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Coordinador</label>
        <input name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input name="correo" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">password</label>
        <input name="password" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">nombre</label>
        <input name="nombre" type="text" class="form-control" tabindex="3">
    </div>

    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection