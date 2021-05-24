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
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Asignar Proyecto</h5>
        
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
                                            <thead >
                                                
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Proyecto</th>
                                                    <th scope="col">Estudiante</th>
                                                    <th scope="col">Asesor</th>
                                                    <th scope="col">Acciones</th>
                                                
                                                <tr>
                                            </thead>
                                            <tbody>
                                            @foreach($proyectos as $proyecto)
                                            <tr>
                                            
                                                    <th scope="col">{{$proyecto->id}}</th>
                                                    <th scope="col">{{$proyecto->Titulo}}</th>
                                                    <th scope="col">{{$proyecto->nombre}}</th>
                                                    
                                                    <th>
                                                    <div class="btn-group" style="padding-rigth: 12px">
                                                            <buttom class="btn btn-danger" style="padding-rigth: 12px"> <a href="/asignar-asesores/{{$proyecto->id}}" style="color: black">ASIGNAR</a></buttom>
                                                                                                                {{-- investigar como con url() paso el parametro $proyecto->id  --}}
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
    
@endsection


