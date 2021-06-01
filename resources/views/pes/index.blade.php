@extends('layouts.master')

<!--index pes-->
@section('titulo')
  <p>Informatico</p>
@endsection
@section('content')
<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a style="margin: 10px auto;" href="/pes/create" class="btn btn-primary btn-block">Agregar</a>

            <table class="table table-dark table-striped mt-6">
                <thead class="table table-dark table-striped mt-6">
                       <h2 style="font-size: 35px; text-align:center; margin:0 auto; font-family:sans-serif">AGREGAR PROGRAMA EDUCATIVO</h2> 
                    <tr>
                        <th scope="col">Programa</th>
                        <th scope="col">Coordinador</th>
                        <th scope="col">acciones</th>
                    <tr>
                </thead> 
                
                <tbody>
                @foreach($pes as $pe)
                <tr>
                    <td>{{$pe->nombre}}</td>
                    <td><a href="mailto:{{$pe->correo}}">{{$pe->coordinador}}</a></td>                   
                    <td>
                        <a href="pes/{{$pe->id}}/edit" class="btn btn-info">EDITAR</a>
                        <a href="pes/{{$pe->id}}" class="btn btn-warning" style="display:inline">MOSTAR</a>
                        <form action="pes/{{$pe->id}}" style="display:inline" method="post" >
                            @csrf
                            @method('delete')
                            
                            <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>


@endsection