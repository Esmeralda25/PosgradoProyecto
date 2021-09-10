@extends('layouts.master')

@section('content') 
  
<div class="mt-10 align-content-center"> 
    <section class="content">
        <div class="container-fluid">
        <a href="/" class="btn btn-warning " style="margin: 10px;" tabindex="5">Regresar</a>

            <div style="height: 5px">
            </div>  <!-- Info boxes -->
            <div class="row" >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold justify-content-center" style="text-align: center; font-size:30px">Sistema para el seguimiento de proyectos de posgrado</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                                    <div class="row">
                                        <div class="card-title font-weight-bold col-md-12 justify-content-center" style=" color:white">
                                            <strong><h1 class="font-weight-bold" style="text-size:40dp"></h1></strong>
                                        </div>
                                        <h4>
                                            
                                        </h4>
                                        <table class="table table-dark table-striped mt-4">
                                                <thead class=" table-striped mt-4">                                                   
                                                    <tr>
                                                        <th scope="col">Nombres</th>
                                                        <th scope="col">Número de Control</th>
                                                        <th scope="col">Carrera:</th>
                                                        
                                                    <tr>
                                                </thead>
                                                <tbody>
                                               
                                                <tr> 
                                                    <th scope="col">Montejo Vázquez Keyla Esmeralda </th>
                                                    <th scope="col">16270804</th> 
                                                    <th scope="col">Ingenieria en Sistemas Computacionales</th>   
                                                </tr> 
                                                <tr>
                                                    <th scope="col">Morales Gutierrez César Gabriel</th>
                                                    <th scope="col">16270808</th>
                                                    <th scope="col">Ingenieria en Sistemas Computacionales</th>   

                                                </tr>
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
</div>
@endsection
