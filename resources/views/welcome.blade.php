@extends('layouts.master')

@section('menu')
<a href="./index.html" class="nav-link">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Registrarse</p>
</a>
@endsection

@section('titulo')
  <p>Posgrado</p>
    
@endsection

@section('content')   
    <!-- Main content AQUI VA TODO EL CONTENIDO EXTRA -->
    <div class="main container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
              <h2 class="font-weight-bolder" style="font-style: initial align=center">Bienvenidos al Sistema de Seguimiento de Proyectos de Doctorado</h2>
                <div class="card">
                  
                          <form class="formulario" action="/entrada" method="POST"> 
                              <div class="card-header text-center font-weight-bolder" style="font-size: 25px">Iniciar Sesión</div>
                                  <div class="card-body">
                                      <div class="row col-12">
                                          @csrf
                                      <p>Correo</p>
                                      </div>
                                      <div class="row col-12">
                                          <input type="text" name="nombre" class="form-control col-md-12" id="" placeholder="Introduce tu email">
                                      </div>

                                      <div class="row col-12">
                                          <p>Contraseña</p>
                                      </div>
                                      <div class="row col-12">
                                          <input type="text" name="palabra" class="form-control col-md-12" id="" placeholder="Introduce tu contraseña">
                                      </div>
              
                                      <div class="row form-group">
                                          <button type="submit" class="btn btn-success mt-3 col-md-9 offset-2">Iniciar</button>
              
                                      </div>
                                  </div>  
                              </div>
                          </form> 
                
                </div>
    
            </div>
        </div>
    
    </div>  
@endsection

  <!-- Content Wrapper. Contains page content -->
  
    
        
