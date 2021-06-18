@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link active far fa-circle nav-icon">Cerrar Sesión</a>
        </li>    
    </form>
    
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
     
 