@extends('layouts.master')

@section('titulo')
  <p>Docente: {{ \Session::get('usuario')->nombre}}</p>

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

@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center">                                
                            Actividades
                            </h1>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                            <form action="" method="POST">
                                <div class="card-header text-center font-weight-bold" style="font-size: 30px">Reportar</div>
        
    
                                    <div class="container">
                                        <div>
                                        <!-- espacio entre contenido-->
                                        </div>
                                    
                                        <div>
                                            <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Actividades</h2>
                                        </div>
                                        @forelse ($estudiante->proyecto->actividades( $estudiante->semestreActual->id )->get() as $actividad)
                                            <li>{{$actividad->nombre}} - en el periodo "{{$actividad->periodo}}"</li>
                                        @empty
                                            Sin actividades definidas para este semestre
                                        @endforelse
                                        <div>
                                            <!-- espacio entre contenido-->
                                        </div>
                                        <div>
                                            <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Compromisos Adquiridos</h2>
                                        </div>

                                        
                                        <table class="table table-striped col-12">
                                            <thead>
                                                <tr class="table-dark" >
                                                    <th scope="col">Compromisos</th>
                                                    <th scope="col">Programado</th>
                                                    <th scope="col">Realizado</th>
                                                    <th scope="col">Evidencias</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($estudiante->proyecto->compromisos( $estudiante->semestreActual->id )->get() as $compromiso)
                                                    <tr>
                                                        <th>{{$compromiso->que}}</th>
                                                        <td>{{$compromiso->cuantos_prog}}</td>
                                                        <td><input type="text" name="logrados[$loop->iteration]" class="form-control"></td>
                                                        <td style="padding: 5px">
                                                            <input type="file" name="" id="">
                                                        </td> <!-- este buttom es un ejemplo, se hace con jquery-->
                                                    </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="4">Sin compromisos definidos para este semestre</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>

                                        
                                        REPORTE: <input type="file" name="" id="">

                                        <div>
                                            <button class="btn btn-danger"><a href="{{url('/reportar')}}" onclick="alerta()" style="color: black">Reportar</a></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
</section>
@endsection  
   
