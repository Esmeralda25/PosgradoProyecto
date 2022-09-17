@extends('layouts.master')

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
                            Docente: {{ \Session::get('usuario')->nombre}}
                            </h1>
                        </div>
                            <div class="card-body">
                                <div class="row">                                
                                    <div class="col-md-12">
                                <!-- contenido de main imagenes -->
                                        <div class="row">
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                                    <tr>
                                                        <th>Proyecto</th>
                                                        <th>Estudiante</th>
                                                        <th>Avance</th>
                                                        <th>Acciones</th>
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                @foreach($proyectos as $proyecto) 
                                                <tr> 
                                                    <td>{{$proyecto->titulo}}</td> 
                                                    <td>{{$proyecto->estudiante->nombre}}</td>
                                                    <td>{{$proyecto->avance}}%</td>
                                                    <td>
                                                        <a href="{{route('proyectos.historico',$proyecto->id)}}" class="btn btn-warning" style="color: white">Historico</a>
                                                        @if ($proyecto->estudiante->semestre->estado == "Evaluacion")
                                                            <a href="{{route('proyectos.evaluar',$proyecto->id)}}" class="btn btn-info">Evaluar</a>
                                                        @endif
                                                        @if ($proyecto->comite->asesor == current_id())
                                                            <a href="{{route('proyectos.avance',$proyecto->id)}}" class="btn btn-success" style="color: white">Avance</a>                                                            
                                                        @endif
                                                    </td>
                                                </tr> 
                                                @endforeach
                                                </div>
                                                </div>
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
@endsection

