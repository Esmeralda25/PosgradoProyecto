@extends('layouts.master')

<!--index pes-->
@section('titulo')
  <p>Informatico</p>

@endsection
@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a style="margin: 10px auto;" href="pes/create" class="btn btn-primary">Agregar</a>

            <table class="table table-dark table-striped mt-6">
                <thead class="table table-dark table-striped mt-6">
                       <h2 style="font-size: 35px; text-align:center; margin:0 auto; font-family:sans-serif">AGREGAR PROGRAMA EDUCATIVO</h2> 
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
                        <button class="btn btn-danger">Eliminar</button>
                        <a class="btn btn-info">Mostrar</a>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>


@endsection