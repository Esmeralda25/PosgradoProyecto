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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Agregar Compromisos del programa educativo</h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <table class="table table-dark table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            
                                            <tr>
                                                <th scope="col">Compromisos</th>
                                                <th scope="col">Acciones</th>
                                            <tr> 
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($compromisos as $compromiso) 
                                           <tr>
                                           <th scope="col">{{$compromiso->titulo}}</th>
                                                <th scope="col"> 
                                                    @if (!is_null($compromiso->pe_id))
                                                        <a href="{{route('compromisos.edit',$compromiso->id)}}" class="btn btn-primary">EDITAR</a>                                                       
                                                        <form action="{{route('compromisos.destroy',$compromiso->id)}}" style="display:inline" method="post" >
                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" value="ELIMINAR"  class="btn btn-danger">
                                                        </form> 
                                                    @endif
                                                 
                                                </th>                                               
                                            <tr>  
                                            @endforeach
                                        </tbody>
                                    </table>     
                                        
                                    <form action="{{route('compromisos.store')}}" method="POST">
                                        @csrf
                                        Nuevo: 
                                        <input style="width:80%" list="opciones" id="titulo" name="titulo" required style="display: block" />
                                        <datalist id="opciones">
                                            @foreach($opciones as $opcion)
                                              <option value="{{$opcion->titulo}}">
                                            @endforeach
                                        </datalist>
                                        <input type="submit" class="btn btn-warning" value="Agregar">
                                    </form>
                                    <br>
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
  </div>
      
</div>
  
   
@endsection


