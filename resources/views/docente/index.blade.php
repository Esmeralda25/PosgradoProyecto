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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                
                                    <div class="col-md-12">
                                <!-- contenido de main imagenes -->
                                        <div class="row">
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                                    
                                                    <tr>
                
                                                        <th scope="col">Proyecto</th>
                                                        <th scope="col">Estudiante</th>
                                                        <th scope="col">Acciones</th>
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                @foreach($proyectos as $proyecto) 
                                                <tr> 
                                            
                                            
                                                    <th scope="col">{{$proyecto->titulo}}</th> 
                                                    <th scope="col">{{$proyecto->estudiante->nombre}}</th>
                                                    <td>

                                            
                                                        @if ($proyecto->estudiante->semestre->estado == "Evaluacion")
                                                            <a href="{{route('proyectos.evaluar',$proyecto->id)}}" class="btn btn-info">Evaluar</a>
                                                        @endif
                                                    
                                                        <button type="button" class="btn btn-warning">
                                                            <a href="promedios-semestrales/{{$proyecto->id}}" style="color: white">Historico</a>
                                                        </button>                                                        
                                                    </td>
                                                        </th>
                                                        <tr> 
                                                @endforeach
                                                 <!-- liga para descargar manuales -->
                                               
                                                        <!-- /.info-box-content -->
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

