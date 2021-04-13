@extends('layouts.plantillabase1');
<!--index estudiante-->

@section('contenido')

<a href="estudiantes/create" class="btn btn-primary">Agregar</a>

<table class="table table-light table-striped mt-4">
    <thead class="table table-dark table-striped mt-4">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Nivel</th>
            <th scope="col">Acciones</th>
        <tr> 
    </thead>
    {{-- prueba 1 de commit and push --}}
  
    <tbody>
        @foreach($estudiantes as $estudiante)
    <tr>
        <td> {{$estudiante->nombre}} </td>
        <td> {{$estudiante->nivel}} </td>
       

        
        <td> 
            
            <a href='/estudiantes/{​​{​​$estudiante->id}​​}​​/edit' class="btn btn-info">Editar</a>
            <button class="btn btn-danger">Eliminar</button>
            <a class="btn btn-info">Mostrar</a>

        </td>
    </tr>
    @endforeach
    </tbody>







</table>
@endsection