@extends('layouts.master')

@section('titulo')
  <p>Coordinador</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/coordinadores')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
<div class="main container mt-10">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <section class="content">
    <div class="container-fluid">
        <div style="height: 50px">
        </div>  <!-- Info boxes -->
          
            
  
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                      <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Compromisos</h5>
    
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
                                <div class="row">
                                        
                                   
                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            
                                            <tr>
                                                <th scope="col">Compromisos</th>
                                                <th scope="col">Acciones</th>
                                            <tr> 
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($compromisos as $compromiso) 
                                           <tr>
                                                <th scope="col">{{$compromiso->titulo}}</th>
                                                <th scope="col">
                                                  <div class="btn-group">
                                                    <buttom class="btn btn-info"><a href="{{url('/edit')}}" style="color: white">Editar</a></buttom>
                                                </div>
                                                  
                                                  <div class="btn-group">
                                                      <buttom class="btn btn-danger">Borrar</buttom>
                                                  </div>  
                                                  <div class="btn-group">
                                                      <buttom class="btn btn-primary"><a href="{{url('/create')}}" style="color: white">Agregar</a></buttom>
                                                  </div>           
                                                </th>
                                                
                                            <tr> 
                                            @endforeach
                                        </tbody>
                                    </table>     
                                        
            
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
  </div>
      
</div>
  
   
@endsection


