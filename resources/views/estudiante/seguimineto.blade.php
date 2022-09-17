@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  
        <div class="row justify-content-center" >
            <div class="col-10"> 
                <div class="card col-12">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold" style="font-size: 40px;">Seguimiento</h1>
                    </div>
                    <div class="card-body">
                        <x-proyecto :proyecto=$proyecto></x-proyecto>
                        @foreach ($proyecto->periodos as $periodo)
                        <div style="padding: 1%; align-content: center; background-color: gray ">
                            DURANTE EL PERIODO {{$periodo->nombre}} su promedio fue:  {{$periodo->promedio()}}
                            <x-periodo :periodo=$periodo></x-periodo>
                        </div>
                        <hr>
                        @endforeach
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    
  