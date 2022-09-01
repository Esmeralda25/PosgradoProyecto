@extends('layouts.master')
@section('content')
        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" >
                            <h1 class="card-title font-weight-bold" >                                
                                Programa Educativo
                            </h1>
                        </div>
                        <a style="margin: 10px auto;" href="{{route('programas.create')}}" class="btn btn-primary btn-block">Agregar</a>

                        <table class="table table-dark table-striped mt-6">
                            <thead class="table table-dark table-striped mt-6">
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
                                    <a href="{{route('programas.edit',$pe->id)}}" class="btn btn-info">EDITAR</a>
                                    <a href="{{route('programas.show',$pe->id)}}" class="btn btn-warning" style="display:inline">MOSTAR</a>
                                    <form action="{{route('programas.destroy',$pe->id)}}" style="display:inline" method="post" >
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <br>
                        {{ $pes->links() }}
                </div>
        
            </div>
    
        </div>


@endsection