@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/coordinador')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
<div class="mmt-10 align-content-center">
        <section class="content">
        <div class="container-fluid">
            <div style="height: 50px">
            </div>  <!-- Info boxes -->
            
                
    
            <div class="row" >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center">
                            <h5 class="card-title font-weight-bold" style="text-align: center">Crear Registros</h5>
        
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                                </button>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a class="dropdown-divider"></a>
                                        <a href="#" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                                    <!--<input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3"> -->
                                    <div class="container">
                                        

                                        <form action="/index" method="POST" enctype="multipart/form-data">
                                        @csrf
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre</label>
                                                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Apellido Paterno</label>
                                                    <input id="apaterno" name="apaterno" type="text" class="form-control" tabindex="3">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Apellido Materno</label>
                                                    <input id="amaterno" name="amaterno" type="text" class="form-control" tabindex="3">
                                                </div>
                                                <div class="mb-3 form-group">
                                                    <label for="nivel">Nivel</label>
                                                    <select name="nivel" id="nivel">
                                                        <option value="">Docente</option>
                                                        <option value="">Estudiante</option>
                                                    </select>
                    
                                                </div> 
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Correo</label>
                                                    <input id="correo" name="correo" type="text" class="form-control" tabindex="3">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Contraseña</label>
                                                    <input id="password" name="password" type="text" class="form-control" tabindex="3">
                                                </div>
                                        
                                                <a href="/coordinador" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                                <button type="submit" class="btn btn-primary" tabindex="4"><a href="{{url('/coordinador/create')}}"  onclick="alerta()">Guardar</a></button>
                                        </form>
                                        
                                        
                                    </div>


                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>
   
@endsection




    
          
  