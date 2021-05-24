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
                                <form action="/pes/{​​{​​$pe->id}​​}​​" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="mb-3">
                                            <label for="" class="form-label">Coordinador</label>
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




  


