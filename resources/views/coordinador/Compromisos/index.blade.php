@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="{{route('entrada.salida')}}">
        <li class="nav-item"> 
            @csrf
            <a href="{{route('entrada.salida')}}" class="nav-link"> 
            <i class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection
@section('regresar') 
    <a href="/coordinadores" class="nav-link">
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Agregar Compromisos del programa educativo</h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                     @if (session('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('message')}}
                                        </div> 
                                     @endif
                                     @if (session('mensaje'))
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('mensaje')}}
                                        </div> 
                                     @endif
                                     @if (session('borrar'))
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('borrar')}}
                                        </div> 
                                     @endif
                                     @if (session('nborrar'))
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('nborrar')}}
                                        </div> 
                                     @endif
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
                                                    @if (!is_null($compromiso->pes_id))
                                                        <a href="editarCompromisos/{{$compromiso->id}}" class="btn btn-primary">EDITAR</a>                                                       
                                                        <form action="Compromisos/{{$compromiso->id}}" style="display:inline" method="post" >
                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                        </form> 
                                                    @endif
                                                 
                                                </th>                                               
                                            <tr>  
                                            @endforeach
                                        </tbody>
                                    </table>     
                                        
                                    <form action="/Compromisos" method="POST">
                                        @csrf
                                        Nuevo: 
                                        <input size="100" list="opciones" id="titulo" name="titulo" required style="display: block" />
                                        <datalist id="opciones">
                                            @foreach($opciones as $opcion)
                                              <option value="{{$opcion->titulo}}">
                                            @endforeach
                                        </datalist>
                                        <input type="submit" class="btn btn-warning" value="Agregar">
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
  </div>
      
</div>
  
   
@endsection


