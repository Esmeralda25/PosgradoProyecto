<table class="table table-striped table-hover">
    <thead>
        <tr style="text-align: center;background-color: black;">
                <th style="font-size: 25px;">
                    Detalles del Proyecto
                </th>
        </tr> 
    </thead>  
    <tbody>
        <tr>
            <!-- TITULO -->  
            <th>
                <label for="" style="font-family:Arial; color: white;font-size: 25px;">Título: </label>
                <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->titulo}}</small>
            </th>
        </tr>
        <tr>
            <!-- HIPOTESIS -->  
            <th>
                <label for="" style="font-family:Arial;color: white;font-size: 25px;">Hipótesis: </label> 
                <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->hipotesis}}</small> 
            </th>
        </tr>
        <tr>
            <!-- OBJETIVO GENERAL -->  
            <th>
                <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo General: </label>
                <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivo}}</small> 
            </th>
        </tr>
        <tr>
            <!-- OBJETIVO ESPECIFICO --> 
            <th>
                <label for="" style="font-family:Arial;color: white;font-size: 25px;">Objetivo Específico:  </label>
                <small style="margin-left: 5px;font-family:Arial;color: white;font-size: 20px;">{{$proyecto->objetivos_especificos}}</small>
            </th> 
        </tr>
                                      
    </tbody>        
</table>
<div style="height:20px;"></div>
<table class="table table-dark table-striped">
<thead>
    <tr style="text-align: center;background-color: black;">
        <th colspan="2" style="font-size: 25px;">
            Comite Tutorial
        </th>
    </tr> 
</thead>  
<tbody>
    @if (is_null($proyecto->comite_id))
        <tr>
            <th colspan="2">SIN ASIGNAR</th>
        </tr>
    @else
        <tr>
            <th>Asesor</th>
            <td>{{$proyecto->comite->docenteAsesor->nombre}}</td>
        </tr>
        <tr>
            <th>Revisor 1</th>
            <td>{{$proyecto->comite->docenteRevisor1->nombre}}</td>
        </tr>
        <tr>
            <th>Revisor 2</th>
            <td>{{$proyecto->comite->docenteRevisor2->nombre}}</td>
        </tr>
        <tr>
            <th>Revisor 3</th>
            <td>{{$proyecto->comite->docenteRevisor3->nombre}}</td>
        </tr>
        
    @endif
</tbody>
</table>
<div style="height:20px;"></div>
