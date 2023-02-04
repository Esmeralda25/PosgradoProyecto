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
        for (var estudiantes of data)
        
            html_select +='<tr data-id='+estudiantes.id+' >'+
            '<td scope="col">'+estudiantes.nombre+'</td>'+
            '<td scope="col">'+estudiantes.periodo_id+'</td>'+
            '<td>  <input type="checkbox" id="'+estudiantes.id +'" data-nombre="'+estudiantes.nombre+'" data-periodo="'+estudiantes.periodo_id+'"class="check_box"></td></tr>';
            
            $('#select-estudiante').empty().html(html_select);
            return;
    });

    
    $(document).ready(function(){  
        
        $(document).on('click', '.check_box', function(){
        var html = '';
        let id = $(this).data('periodo');
        if(this.checked)
        {
            
        html = '<td>'+$(this).data('nombre')+'</td>'; 
        html += '<td><select name="periodo[]" id="periodo_'+$(this).attr('id')+'" class="form-control"><option value="'+id+'">'+id+'</select></td>';
        html += '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-nombre="'+$(this).data('nombre')+'" data-periodo="'+$(this).data('periodo')+'" class="check_box" checked /></td>';
        }
        else
        {
       
        html = '<td>'+$(this).data('nombre')+'</td>';   
        html += '<td>'+$(this).data('periodo')+'</td>'; 
        html += '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-nombre="'+$(this).data('nombre')+'" data-periodo="'+$(this).data('periodo')+'"  class="check_box" /></td>';       
        }
        $(this).closest('tr').html(html);
        onSelectPeriodoChange();
        });
        $('body').on('click', '.edit-estudiantePeriodo', function(e) {
            e.preventDefault();

            let id = ($(this).data('id'));

            $.get('/api/periodos/EstudianteAsignar/' + id + '', function(data) {
               $('#editModal .modal-body #periodo_id').val(data.periodo_id);
            });
        });

        $('#actualizar-estudiante').click(function(e) {
            e.preventDefault();

            let id = $('#hidden-folder').val();

            $.ajax({
               type: 'patch',
               url: '/api/periodos/EstudianteAsignar/' + id + '',
               data: $('#editForm').serialize(),
               dataType: "json",

               success: function (data) {
                   if(data.errors) {
                       alert('Sorry');
                   } else {
                       $('#editModal').modal('hide');
                       html_select =  $('.estu tr[data-id=' + data.id + ']').replaceWith('<tr data-id=' + data.id + '>'+
                       '<td scope="col">' + data.nombre + '</td>'+
                       '<td>  <a href="#" data-id="'+ data.id +'" data-toggle="modal" data-target="#editModal" class="btn btn-info edit-estudiantePeriodo">Reinscribir</a></td></tr>');
                       
                    }
                    setInterval($('#select-estudiante').empty().html(), 1000);
               }

            });
        });
        });  

}

     