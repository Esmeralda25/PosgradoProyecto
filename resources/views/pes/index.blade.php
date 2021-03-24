@extends('layouts.plantillabase');

@section('contenido')

<a href="pes/create" class="btn btn-primary">Agregar</a>

<table class="table table-light table-striped mt-4">
    <thead class="table table-dark table-striped mt-4">
        <tr>
            <th scope="col">Programa</th>
            <th scope="col">Coordinador</th>
            <th scope="col">Acciones</th>
        <tr>
        

    </thead>
   

    <tbody>
    @foreach($pes as $pe)
    <tr>
        <td> {{$pe->nombre}} </td>
        <td> {{$pe->coordinador}} </td>

        
        <td> 
            
            <a href='/pes/{​​{​​$pe->id}​​}​​/edit' class="btn btn-info">Editar</a>
            <button class="btn btn danger">Eliminar</button>
            <a class="btn btn-info">Mostrar</a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection