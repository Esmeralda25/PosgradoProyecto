@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

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
                            Crear Registros
                            </h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                <form action="/pes/{​​{​​$pe->id}​​}​​" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="mb-3">
                                            <label for="" class="form-label">Estudiante</label>
                                            <input name="coordinador" type="text" class="form-control" tabindex="3">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Correo</label>
                                            <input name="correo" type="text" class="form-control" tabindex="3">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">password</label>
                                            <input name="password" type="text" class="form-control" tabindex="3">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">nombre</label>
                                            <input name="nombre" type="text" class="form-control" tabindex="3">
                                        </div>
                        
                                        <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection




  


