@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/estudiante')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')

   <div class="main container mt-10">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="/create" method="POST">
                    <label>Coordinador o Estudiante</label>
                    <input type ="text" name="coordinador" placeholder="Nombre del coordinador">
                    <br>
                    <label>Correo</label>
                    <input type ="text" name="correo" placeholder="E-mail">
                    <br>
                    <label>Contraseña</label>
                    <input type ="text" name="password" placeholder="Contraseña">
                    <br>
                    <button type="submit">Agregar</button>

                <form>

            </div>
        </div> 
    </div>

@endsection
     
 