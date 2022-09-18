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
                        <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Asignar Docente al Programa Educativo</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <!-- contenido de main imagenes -->
                               
                                    <div class="row">
                                        <table class="table table-dark table-striped mt-4">
                                            <thead class="table table-dark table-striped mt-4">
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Acciones</th>
                                                <tr> 
                                            </thead>
                                            <tbody>
                                            @foreach($adscripciones as $adscripcion)
                                                <tr>
                                                    <th scope="col">{{$adscripcion->nombre}}</th>
                                                    <td>
                                                        <form action="{{route('adscripciones.store',$adscripcion->id)}}" style="display:inline" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-info" "4"><a>ASIGNAR</a></button>
                                                        </form>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
    
                                    </div>
                                    <div class="row">
                                        <br>
                                        {{$adscripciones->links()}}    
                                    </div>
                            
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