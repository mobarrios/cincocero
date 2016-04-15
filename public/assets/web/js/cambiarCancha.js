$(document).ready(function(){

    $("select[name='sedes_id']").on('change',function(ev){
        ev.preventDefault();

        var self = $(this);
        var canchas = $("select[name='canchas_id']").find('option');
        var id = $(this).select().val();

        $.ajax({
            url:'canchas/'+id+'/cambiar',
            data: 'id='+id,
            success: function(data){
                canchas.remove();

                for(var i in data){
                    var options;
                    if(options == undefined)
                        options = "<option value='"+i+"'>"+data[i]+"</option>";
                    else
                        options += "<option value='"+i+"'>"+data[i]+"</option>";
                }

                $("select[name='canchas_id']").append(options);
            }
        });
    });

});