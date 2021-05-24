@extends('layouts.master')

@section('titulo')
  <p>Docente</p>

@endsection
@section('submenu')
<li class="nav-item">
  <a href="{{url('/coordinador')}}" class="nav-link active">
  <i class="far fa-circle nav-icon text-danger"></i>
  <p>Pagina Principal</p>
  </a>
</li>
@endsection

@section('content')
   <div class="main container mt-10">
       <div class="row justify-content-center">
          <div class="col-md-10">
        <h1 style="text-align:center; margin-top: 100px">HISTORICO | Revisión</h1>       
    
    
                <div class="table-responsive">
                    <table class="table">
                        <tbody">
                           <tr>
                               <th class="row">
                                   <div>
                                        Nombre del Proyecto <input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="Sistema para Doctorado" type="text" name="nombre" id="">
                                   </div>
                               </th> 
                               <th></th>  
                           </tr>    
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <div style="width: 85%; max-width: 850px; margin: 0 auto;">
                       <table class="table-dark">
                            <thead class=" table-dark">
                                <tr>
                                    <th class="row">Criterio</th> 
                                    <th>Rev1</th> 
                                    <th>Rev2</th>
                                    <th>Rev3</th>
                                    <th>Rev4</th>
                                    <th>Rev5</th> 
                                </tr>    
                            </thead>
                            <tbody">
                            <tr>
                                <th class="row">Estructura</th> 
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="10" type="text" name="nombre" id=""></th>  
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                            </tr>  
                            <tr>
                                <th class="row">Nivel</th> 
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="10" type="text" name="nombre" id=""></th>  
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                            </tr>
                            <tr>
                                <th class="row">Apreciacion</th> 
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="10" type="text" name="nombre" id=""></th>  
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                            </tr>
                            <tr>
                                <th class="row">Claridad</th> 
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="10" type="text" name="nombre" id=""></th>  
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                            </tr> 
                            <tr>
                                <th class="row">Correlacion</th> 
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="10" type="text" name="nombre" id=""></th>  
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                            </tr> 
                            <tr>
                                <th class="row">Promedio</th> 
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="10" type="text" name="nombre" id=""></th>  
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="9" type="text" name="nombre" id=""></th>
                                <th><input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="8" type="text" name="nombre" id=""></th>
                            </tr>
                            </tbody>
                        </table> 
                    </div>
                    
                    <h2>Observaciones</h2>
                    Revisor 1<input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="Aqui va el texto ingresado por el docente" type="text" name="nombre" id="">
                    Revisor 2<input style="width: 100%; max-width: 850px; margin: 0 auto; height:30px; border:none" placeholder="Aqui va el texto ingresado por el docente" type="text" name="nombre" id="">
                </div>
              </div> 
       </div>
    
   </div>
  
    
            
       

    


   