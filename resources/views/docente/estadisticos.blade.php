@extends('layouts.master')

@section('titulo')
  <p>Docente: {{ \Session::get('usuario')->nombre}}</p>

@endsection
@section('regresar') 
    <a href="/docentes" class="nav-link">
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
                            {{-- <h1 class="card-title font-weight-bold" style="text-align: center; font-size:20px;">                                
                            Estadisticos
                            </h1> --}}
                        </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table class="table table-striped table-hover">
                            <thead>
                                <tr style="text-align: center;background-color: black;">
                                        <th style="font-size: 25px;">
                                            Estadisticos
                                        </th>
                                </tr> 
                            </thead>   
                            <tbody>
                                contenido de los estadisticos
                                                              
                            </tbody>        
                    </table>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection