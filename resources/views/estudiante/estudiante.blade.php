@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('regresar') 
    <a href="/estudiantes" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center">                                
                            Docente: {{ \Session::get('usuario')->nombre}}
                            </h1>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                
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
    </div> 
</section>       

@endsection
     
 