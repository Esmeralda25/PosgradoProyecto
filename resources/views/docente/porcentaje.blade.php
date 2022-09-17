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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Asignar Avance</h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="container">
                                        <x-proyecto :proyecto=$proyecto></x-proyecto>
                                        <form action="{{route('proyectos.guardarAvance', $proyecto->id )}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <label for="" class="form-label">Avance (En porcentaje %)</label>
                                            <input type="number" min="0" max="100" step="1"  name="avance" size="5" value="{{$proyecto->avance}}">  
                                            <br>                  
                                            <button type="submit" class="btn btn-primary" tabindex="4"><a>Guardar</a></button>
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
@endsection
