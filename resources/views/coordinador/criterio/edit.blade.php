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
            <i class="fas fa-users nav-icon"></i>    
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar un criterio de la rubrica</h1>
                        </div>
                        <form action="/actualizar-criterios/{{$criterio->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body"> 
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Descripcion</label>
                                    <input name="descripcion" type="text" class="form-control" tabindex="2" value="{{$criterio->descripcion}}">
                                </div>

                                <a href="/criterios" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                            </div>
                        </form>
                </div>
            </div>
        </div> 
    </div>  
</section>
@endsection