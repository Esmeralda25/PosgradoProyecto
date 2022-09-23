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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Estadisticos</h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div>
                            <div class="mb-12">
                                Nombre : {{$periodo->nombre}}<br>
                            </div>
                            <div class="mb-12">
                                del {{$periodo->fechaInicio}} al {{$periodo->fechaFin}} <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col12">
                                <ul>
                                    <li>cuantos proyectos ya fueron evaluados</li>
                                    <li>cuantos proyectos no has sido evaluados</li>
                                    <ul>
                                        <li>de estos cuales son los docentes que faltan.</li>
                                    </ul>
                                    <li>cuantos proyectos ya cumplieron sus compromisos</li>
                                    <li>cuantos proyectos no cumplieron sus compromisos</li>
                                    <ul>
                                        <li>de estos cuales son los compromisos no cumplidos.</li>
                                    </ul>
                                </ul>
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