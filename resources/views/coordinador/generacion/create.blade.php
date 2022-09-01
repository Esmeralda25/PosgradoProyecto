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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Crear Generaciones</h1>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                    <form action="{{route('generaciones.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                    <div class="row form-group col-12">
                                        <label for="" class="row col-12">Nombre</label>
                                        <input type="text" class="row col-12" name="nombre" value="{{old('nombre')}}">
                                    </div>
                                    <div class="row form-group col-12">
                                        <label for="" class="row col-12">Descripcion</label>
                                        <input type="text" class="row col-12" name="descripcion" value="{{old('descripcion')}}">
                                    </div>
                                        <input type="hidden" class="row col-12" name="pe_id" value="{{$pe_id}}">
                                        <a href="{{route('generaciones.index')}}" class="btn btn-danger">Cancelar</a>
                                        <button type="submit" class="btn btn-warning">Guardar</button>
                                    </form>
                                    
                                    


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
