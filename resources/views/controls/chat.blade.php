@extends('template.template')
@section('content')

    <div id="cha" >

    </div>


<script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>


<script>
    // var socket = io.connect('http://62.210.13.249:3000');

    var socket = io.connect( '{!!  env('SOCKET_URL') !!}' +':'+'{!!  env('SOCKET_PORT') !!}');

    $(document).on("click", "a.send" , function() {


        var msg = {
            from : 'administrador' ,
            text : $(this).parent().find("#text").val(),
            to : $(this).parent().find("#to").val()
        }



        socket.emit('chat message',  msg );
        $(this).parent().find("#text").val('');

        return false;

    });


    var cant    = 0;

    socket.on('chat message', function(msg){

        var from    = msg.from;
        var to      = msg.to;


        //AGREGAGO NUEVO CHAT SI NO ESTA ACTIVO
        if(from != 'administrador'){


            if($('#'+from+'').length != 1){
                $('#cha').append(new_chat(from));

            }

            $('#'+from+' .msg').attr('data-id',from).append('<li>cliente:'+msg.msg+'</li>');
            cant = cant + 1;


        }else {

            $('#'+to+' .msg').attr('data-id',from).append('<li class="pull-right">yo:'+msg.msg+'</li>');

        }

        $('#chat_label').html('<div class="pull-right label label-success">'+cant+'</div>');


        // $('#'+from+'.msg').attr('data-id',from).append(msg.msg);
        //$('#messages').append($('<li>').text(msg.msg));
    });


    function new_chat(client){

        return '<div class="col-xs-3">' +
                '<div class="panel panel-default" id="'+client+'">' +
                    '<div class="panel-body">'+
                    '<ul class="msg"></ul>' +
                    '</div>'+
                    '<div class="panel-footer">'+
                    '<input type="hidden" id="to" value="'+client+'" >' +
                    '<input id="text" type="text"  class="form-control">' +
                    '<a href="javascript:void(0);" class="send btn btn-default" data-to="'+client+'"><span class="fa fa-send"></span></a> ' +
                    '<div>'+
                '</div>'+
                '</div>';

        //return '<div id="new_chat" class="client col-xs-4"  data-id="'+client+'"><h4>Chat Nuevo</h4> <ul id="messages"></ul> <div  class="formChat"> <input id="m" autocomplete="off" /><input id="to" value="'+client+'" /><a href="javascript:void(0);" class="send" data-to="'+client+'">Send</a> </div> </div>';
    }
</script>
@endsection