@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/coordinadores')}}" class="nav-link" >Inicio</a>
</li>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Compromisos</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="/Compromisos/{{$compromiso->id}}"​​ method="post">
                                            @csrf
                                            @method('PUT')
                                        <div class="card-body">
                                            <div class="row form-group col-12">
                                                <label for="" class="row col-12">Compromiso</label>
                                                <input id="titulo" name="titulo" type="text" class="form-control" tabindex="2" value="{{$compromiso->titulo}}">
                                            </div>

                                                <a href="/Compromisos" class="btn btn-danger" tabindex="5">Cancelar</a>
                                                <button type="submit" class="btn btn-warning" tabindex="4">Guardar</button>
                                                <!--<input type="submit" class="btn btn-primary" value="Agregar">-->
                                        </div>
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
