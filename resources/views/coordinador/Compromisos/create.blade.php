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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link">Inicio</a>
</li>
@endsection
  <!-- Content Wrapper. Contains page content -->
@section('content')
<div class="main container mt-10">

    <div class="row justify-content-center">
        <div class="col-md-10">
           <section class="content">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center">
                            <h5 class="card-title font-weight-bold" style="text-align: center">Crear Registros</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12"> 
                            <!-- contenido de main imagenes -->
                                    
                                    <form action="/pes" method="POST">
                                        @csrf
                                            <div class="mb-3">
                                                <label for="" class="form-label">Programa Educativo</label>
                                                <input id="Programa" name="Programa" type="text" class="form-control" tabindex="2">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nivel</label>
                                                <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Rubricas</label>
                                                <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Entregables</label>
                                                <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Porcetajes</label>
                                                <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Periodos</label>
                                                <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
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
        </div>
    </div>
      
</div>

    
@endsection




 