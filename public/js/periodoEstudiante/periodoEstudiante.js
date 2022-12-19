$(function(){
    $('#select-periodo').on('change',onSelectPeriodoChange);
})
function onSelectPeriodoChange(){
    var periodo_id = $(this).val();
    if(! periodo_id){
        $('#select-estudiante').empty().html('<tr ><td scope="col">N/A</td><td>N/A</td></tr>');
        return;
    }
    //ajax
    $.get('/api/periodos/Estudiante/'+periodo_id+'',function(data){
        var html_select 
        for (var estudiantes of data)
        
            html_select += '<tr data-id='+estudiantes.id+' >'+
            '<td scope="col">'+estudiantes.nombre+'</td>'+
            '<td>  <a href="#" data-id="'+ estudiantes.id +'" data-toggle="modal" data-target="#editModal" class="btn btn-info edit-estudiantePeriodo">Reinscribir</a></td></tr>';
            $('#select-estudiante').empty().html(html_select);
            return;
    });

    $(document).ready(function() {

        $('body').on('click', '.edit-estudiantePeriodo', function(e) {
            e.preventDefault();

            let id = ($(this).data('id'));

            $.get('/api/periodos/EstudianteAsignar/' + id + '', function(data) {
               $('#editModal .modal-body #nombre').val(data.nombre);
               $('#editModal .modal-body #periodo_id').val(data.periodo_id);
               $('#editModal .modal-body #hidden-folder').val(data.id);
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

     