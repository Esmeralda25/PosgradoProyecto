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
                        <th scope="col">id</th>
                        <th scope="col">Programa</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Rubrica</th>
                        <th scope="col">Entregable</th>
                        <th scope="col">Porcentaje</th>
                        <th scope="col">Periodo</th>
                    <tr>
                </thead> 
                
                <tbody>
                @foreach($pes as $pe)
                <tr>
                    <td> {{$pe->id}} </td>
                    <td> {{$pe->Programa}} </td>
                    <td> {{$pe->Nivel}} </td>
                    <td> {{$pe->Rubrica}} </td>
                    <td> {{$pe->Entregable}} </td>
                    <td> {{$pe->Porcentaje}} </td>
                    <td> {{$pe->Periodo}} </td>
                    
                    <td> 
                        
                        <form action="{{url('/pes/'.$pe->id)}}" method="post">
                           @csrf
                           {{ method_field('DELETE')}}
                            <input type="submit" onclick="return confirm('¿Esta seguro que desea borrar el programa educativo?')" value="Borrar">
                        </form>
                        <a href='/pes/{​​{​​$pe->id}​​}​​/edit' class="btn btn-info">Editar</a>
                        <!--checar bien los parametros   -->     
                        <a href="{{route ('Pes.destroy', ['pes'=>$pe]) }}" class="btn btn-danger glyphicon glyphicon-remove-circle">Eliminar</a>
                        
                        <a href="{{route ('Pes.show', ['pes'=>$pe]) }}" class="btn btn-info">Mostrar</a>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>


@endsection