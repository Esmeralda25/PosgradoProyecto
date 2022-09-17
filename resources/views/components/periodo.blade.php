<!-- TABLA DE EVALUACIONES -->  
<table style="width:99%" class="table table-dark table-striped">
    <thead>
        <tr style="text-align: center;background-color: black;">
            <th style="font-size: 25px;">
                    Evaluaciones realizadas
                </th>
        </tr> 
    </thead>  
    <tbody>
        @forelse ($periodo->evaluaciones as $evaluacion)
        <tr>
            <td>
                {{$evaluacion->docente->nombre}} - {{$evaluacion->calificacion}} 
                <table class="table-striped">
                    <tbody>
                        @foreach ($evaluacion->desgloces as $desgloce)
                        <tr>
                            <td>{{$desgloce->concepto}}</td>
                            <td>{{$desgloce->valor}}</td>
                            <td>{{$desgloce->observacion}}</td>
                        </tr>                                                        
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        @empty
        <tr>
            <td>
                Sin evaluaciones realizadas este periodo
            </td>
        </tr>
        @endforelse
                                    
    </tbody>        
</table>


<!-- TABLA DE COMPROMISOS ADQUIRIDOS -->  
<table style="width:99%" class="table table-dark table-striped">
    <thead>
        <tr style="text-align: center;background-color: black;">
            <th style="font-size: 25px;">
                    Compromisos Adquiridos
            </th>
        </tr> 
    </thead>  
    <tbody>
        <tr>
            <th>
                @forelse ($periodo->compromisos as $compromiso)
                    <li>
                        {{$compromiso->que}}, se programo: {{$compromiso->cuantos_programo}} 
                        <a href="/evidencias/{{$compromiso->evidencia->archivo}}" target="_blank" >
                            {{$compromiso->evidencia->archivo}}
                        </a>
                    </li>
                @empty
                    Sin compromisos definidos para este semestre
                @endforelse
            </th>
        </tr>
                                    
    </tbody>        
</table>
<!-- TABLA DE ACTIVIDADES ADQUIRIDOS style="margin-right: 5px; margin-left:4px"-->  
<table style="width:99%" class="table table-dark table-striped">
    <thead>
        <tr style="text-align: center;background-color: black;">
            <th style="font-size: 25px;">
                    Actividades Programadas
            </th>
        </tr> 
    </thead>  
    <tbody>
        <tr>
            <th>
                @forelse ($periodo->actividades as $actividad)
                    <li>{{$actividad->nombre}} - en el periodo:  "{{$actividad->etapa}}"</li>
                @empty
                    Sin actividades definidas para este semestre
                @endforelse
            </th>
        </tr>
    </tbody>        
</table>                                      
