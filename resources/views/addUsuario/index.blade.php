@extends('layouts.plantillabase1');

@section('contenido')

<a href="pes/create" class="btn btn-primary">Agregar</a>

<table class="table table-light table-striped mt-4">
    <thead class="table table-dark table-striped mt-4">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Nivel</th>
            <th scope="col">Acciones</th>
        <tr>
        

    </thead>
    <tr>
            <th scope="col">Ing Keyla Esmeralda</th>
            <th scope="col">Coordinadora</th>
            <th scope="col"><buttom class="btn btn-info">Editar</buttom>
            <div class="btn-group">
            <buttom class="btn btn-danger">Borrar</buttom>
            </div>  
            <div class="btn-group">
            <buttom class="btn btn-primary">Agregar</buttom>
            </div>     
            </th>
            
        <tr>

        <tr>
            <th scope="col">Ing. César Gabriel</th>
            <th scope="col">Supervisor</th>
            <th scope="col">
            <div class="btn-group">
                <buttom class="btn btn-info">Editar</buttom>
            </div>
            <div class="btn-group">
            <buttom class="btn btn-danger">Borrar</buttom>
            </div>  
            <div class="btn-group">
            <buttom class="btn btn-primary">Agregar</buttom>
            </div>              
            </th>
        <tr>

    <tbody>
  
    </tbody>
</table>
@endsection