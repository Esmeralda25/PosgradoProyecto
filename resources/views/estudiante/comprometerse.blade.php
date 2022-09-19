@extends('layouts.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div style="height:60px">
    </div> 
    <!-- espacio del top -->  
    <div class="row justify-content-center" >
      <div class="col-10">
        <div class="card col-12">
          <div class="card-header">
            <h1 class="card-title font-weight-bold" style="font-size: 40px;">Comprometerse</h1>
          </div>
          <div class="card-body">
            @php
                $proyecto = $estudiante->proyecto;
            @endphp
            <x-proyecto :proyecto=$proyecto></x-proyecto>

            @php
              $periodo = $estudiante->periodo;
              $periodo->laravel_through_key = $proyecto->id;
            @endphp
            <x-periodo :periodo=$periodo></x-periodo>


            <div>
              <h2 style="width: 100%; text-align:center; background:black; padding:0 0; color:white;margin-top:15px">Compromisos</h2>
            </div>
            <!-- TABLA DE COMPROMISOS -->
            @if (session('mensaje_compromiso'))
            <div class="alert alert-success alert-dismissable">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{Session::get('mensaje_compromiso')}}
             </div> 
           @endif

            <table class="table table-dark table-striped">
              <thead>
                <tr class="row col-12">
                @if ($errors->compromisos->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->compromisos->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                <form action="{{route('compromisos.adquirir')}}" method="POST">    
                  @csrf
                  @method('PUT')    
                  <input type="hidden" name="periodo_id" value="{{$estudiante->semestre->id}}">
                  <input type="hidden" name="proyecto_id" value="{{$estudiante->proyecto->id}}">
                  <th class="col-7">
                    A que te comprometes: 
                    <select name="que" id="nivel" style="margin-right: 5px; margin-left:4px">
                      @foreach ($compromisos as $compromiso)
                          <option>{{$compromiso->titulo}}</option>
                      @endforeach
                    </select>
                  </th>
                  <th class="row col-5">
                    Cantidad: 
                    <input type="number" name="cuantos_programo" min="1" max="3"  step="1" value="1" style="margin-right: 5px; margin-left:6px">
                    <button class="btn btn-success" style="width:60px"><i class="fas fa-plus-circle"></i></button>
                  </th>
                </form>  
                </tr> 
              </thead>         
            </table>

                <table class="table table-dark table-striped" style="margin-top: 10px;">
                      <thead class="table table-dark">
                            <tr class="col-12">
                              <th>
                                ACTIVIDAD COMPROMETIDA: 
                              </th>
                              <th>
                                CANTIDAD COMPROMETIDA:
                              </th>                                    
                          </tr>
                          </thead>                                    
                          <tbody>
                            @foreach ($estudiante->proyecto->compromisos( $estudiante->semestre->id )->get() as $compromiso)
                              <tr>
                                <td >
                                  {{$compromiso->que}}
                                </td>
                                <td>
                                  {{$compromiso->cuantos_programo}}
                                  <form action="{{route('compromisos.eliminar',$compromiso->id)}}" method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button id="com"  type="submit" class="btn btn-danger"  style="display: inline"><i class="fas fa-minus-circle"></i></button>
                                  </form>
                                </td>
                              </tr>  
                            @endforeach

                          </tbody>
                        </table>
                        <div style="height:20px;"></div>

                  <div style="margin-top: 20px;">
                    <h2 style="width: 100%; text-align:center; background:black; padding:0 0; color:white;margin-top:15px">Actividades</h2>
                  </div>
                        <!-- TABLA DE ACTIVIDADES -->
                         @if (session('mensaje_actividad'))
                           <div class="alert alert-success alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                               {{Session::get('mensaje_actividad')}}
                            </div> 
                          @endif

                  <table class="table table-dark table-striped">
                    <thead class="table table-dark">
                        <tr class="col-12">
                          @if ($errors->actividades->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->actividades->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif
                        <form action="{{route('actividades.agendar')}}" method="POST">    
                              @csrf
                              @method('PUT')    
                                  <input type="hidden" name="periodo_id" value="{{$estudiante->semestre->id}}">
                                  <input type="hidden" name="proyecto_id" value="{{$estudiante->proyecto->id}}">
                                  <td>
                                    <input type="text" placeholder="Actividad..." name="nombre" style="width:100%">
                                  </td>
                                  <td>
                                    <input type="text" placeholder="Etapa, mes, cuando..." name="etapa"  style="width:100%">
                                  </td> 
                                  <td>
                                    <button class="btn btn-success" style="width:60px"><i class="fas fa-plus-circle"></i></button>
                                  </td> 
                          </form>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($estudiante->proyecto->actividades( $estudiante->semestre->id )->get() as $actividad)

                            <th class="col-5">
                              {{$actividad->nombre}}
                            </th>
                            <th class="row col-6">
                              {{$actividad->etapa}}
                            </th>
                            <th>
                              <form action="{{route('actividades.eliminar',$actividad->id)}}" method="post" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button id="act" type="submit" class="btn btn-danger" style="display: inline"><i class="fas fa-minus-circle"></i></button>
                              </form>
                            </th>
                        </tr>
                        @endforeach
                        </tbody>
                  </table>
            </div>
        </div>      
      </div>
    </div>   
  </div>   
</section>
@endsection
    
    
        
  
 