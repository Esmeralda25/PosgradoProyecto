@extends('layouts.master');

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
      <a href="{{url('/pes')}}" class="nav-link">Inicio</a>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Mostrar Registros</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
            
                                <div class="mb-12">
                                    Programa Educativo : {{$pe->nombre}}<br>
                                </div>
                                <div class="mb-12">
                                    Nombre del coordinador : {{$pe->coordinador}} <br>
                                </div>
                                <div class="mb-12">
                                    Correo del cordianador:{{$pe->correo}} <br>
                                </div><br>
                                <div>
                                    <a href="/pes" class="btn btn-warning" tabindex="5">Cancelar</a>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>      
</section>
@endsection