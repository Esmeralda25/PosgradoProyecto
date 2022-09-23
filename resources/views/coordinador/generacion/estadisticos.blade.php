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
                            ESTADISTICOS
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="mb-12">
                                    Nombre : {{$generacion->nombre}}<br>
                                </div>
                                <div class="mb-12">
                                    Descripcion : {{$generacion->descripcion}} <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col12">
                                    <ul>
                                        <li>cuantos proyectos por generacion</li>
                                        <li>cuantos periodos tiene la generacion</li>
                                        <li>cuantos estudiantes tiene la generacion</li>
                                        <li>cual es el avance de cada proyecto</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection