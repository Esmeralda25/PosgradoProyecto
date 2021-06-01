@extends('layouts.master');

@section('content')

<div class="main container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
                            
            <h2>editar Registros</h2>
            
            
            <form action="/pes/{{$pe->id}}" method="post">
                @csrf
                @method('PUT')
                    <div class="mb-3">
                        Programa Educativo
                        <input type="text" name="nombre"  class="form-control" tabindex="2" value="{{$pe->nombre}}">
                    </div>
                    <div class="mb-3">
                        Nombre del coordinador
                        <input type="text" name="coordinador"  class="form-control" tabindex="3"  value="{{$pe->coordinador}}">
                    </div>
                    <div class="mb-3">
                        Correo del cordianador
                        <input type="text" name="correo"  class="form-control" tabindex="3"  value="{{$pe->correo}}">
                    </div>
                    <div class="mb-3">
                        Contraseña
                        <input type="password" name="password"  class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        Repita la Contraseña
                        <input  type="password" name="password2"  class="form-control" tabindex="3">
                    </div>

                    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                    
                </form>


        </div>
    </div>
        
</div>


@endsection