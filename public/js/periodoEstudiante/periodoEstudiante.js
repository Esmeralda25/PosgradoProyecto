$(function(){
    $('#select-periodo').on('change',onSelectPeriodoChange);
})
function onSelectPeriodoChange(){
    var periodo_id = $(this).val();
    
    if(! periodo_id){
        $('#select-estudiante').empty().html(
            '<thead class="table table-dark">'+
                                        '<tr>'+
                                            '<th scope="col">Nombre</th>'+
                                            '<th scope="col">Periodo</th>'+
                                           ' <th scope="col">Acciones</th>'+
                                        '<tr>'+
                                    '</thead>'+
            '<tr ><td scope="col">N/A</td><td>N/A</td></tr>');
        return;
    }
    //ajax
    $.get('/api/periodos/Estudiante/'+periodo_id+'',function(data){
        var html_select 
        
        html_select+= '<thead class="table table-dark">'+
                                        '<tr>'+
                                            '<th scope="col">Nombre</th>'+
                                            '<th scope="col">Periodo</th>'+
                                           ' <th scope="col">Acciones</th>'+
                                        '<tr>'+
                                    '</thead>';
        for (var estudiantes of data){
            html_select +='<tr id='+estudiantes.id+' >'+
            '<td scope="col">'+estudiantes.nombre+'</td>'+
            '<td scope="col" value="'+estudiantes.id+'">'+estudiantes.periodo+'</td>'+
            '<input type="hidden" id="hidden-folder" value="0">'+
            //'<td>  <input type="checkbox" id="'+estudiantes.id +'" data-id="'+estudiantes.id +'" data-nombre="'+estudiantes.nombre+'" data-periodo="'+estudiantes.periodo+'"class="check_box" value="'+estudiantes.id +'"></td></tr>';
            '<td>  <input type="checkbox" id="'+estudiantes.id +'" name="check['+estudiantes.id +']" class="check_box" value="'+estudiantes.id +'"></td></tr>';
        }
            $('#select-estudiante').empty().html(html_select);
            return;
    });

    
    $(document).ready(function(){  
        
        /*$(document).on('click', '.check_box', function(){
        var html = '';
        
        if(this.checked)
        {
            
        html = '<td>'+'<input type="text" name="nombre[]" value="'+$(this).data('nombre')+'">'+'</td>'; 

        html += '<td><select name="periodo[]" id="periodo_'+$(this).attr('pid')+'" class="form-control"><option value="'+$(this).data('periodo')+'">'+$(this).data('periodo')+'</select></td>';
        
        html += '<td>'+
        '<input type="checkbox" id="'+$(this).attr('id')+'" data-id="'+$(this).data('id')+'" data-nombre="'+$(this).data('nombre')+'" data-periodo="'+$(this).data('periodo')+'" class="check_box" checked />'+
        '</td>';
        
        }
        else
        {
       
        html = '<td>'+$(this).data('nombre')+'</td>';   
        html += '<td>'+$(this).data('periodo')+'</td>'; 
        html += '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-id="'+$(this).data('id')+'" data-nombre="'+$(this).data('nombre')+'" data-periodo="'+$(this).data('periodo')+'"  class="check_box" /></td>';       
        }
        $(this).closest('tr').html(html);
        $('#periodo_'+$(this).attr('pid')+'').val($(this).data('periodo'));
       
        });*/
        
        });  
        
}

     