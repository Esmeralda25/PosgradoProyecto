@extends('layouts.master')

@section('regresar') 
    <a href="{{route('inicio')}}" class="nav-link">
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Asignar Comite Tutorial</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                                    <div class="row">
                                    @if (session('comite'))
                                         <div class="alert alert-success alert-dismissable">
                                             <button type="button" class="close" data-dismiss="alert">&times;</button>
                                          <strong>¡Bien!,</strong> {{Session::get('comite')}}
                                        </div> 
                                    @endif
                                    
                                    <table class="table table-dark table-striped mt-4">
                                            <thead >
                                                
                                                <tr>

                                                    <th scope="col">Proyecto</th>
                                                    <th scope="col">Estudiante</th>
                                                    <th scope="col">Asesor</th>
                                                    <th scope="col">Acciones</th>
                                                
                                                <tr>
                                            </thead>
                                            <tbody>
                                            @foreach($proyectos as $proyecto)
                                            <tr>
                                                {{-- no son th si no td --}}
                                                <td>{{$proyecto->titulo}}</td>
                                                <td>{{$proyecto->estudiante->nombre}}</td>


                                                @if ($proyecto->comite_id != null )
                                                <td colspan="2">
                                                    {{$proyecto->comiteTutorial->docenteAsesor->nombre}}
                                                </td>
                                                @else
                                                <td>
                                                    No asignado.
                                                </td>
                                                <td>
                                                    <div class="btn-group" style="padding-rigth: 12px">
                                                        <buttom class="btn btn-danger" style="padding-rigth: 12px"> 
                                                            <a href="/asignar-comite/{{$proyecto->id}}" style="color: black">ASIGNAR</a> 
                                                            {{--no le asiganas solo asesores, le asignas comite tutortial--}}
                                                        </buttom>
                                                    </div> 
                                                </td>

                                                @endif



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
@endsection


