<div id="chat">
    <div class="container">
        <div class="row chat-window col-xs-7 col-sm-5 col-md-4 col-lg-3" id="chat_window_1" style="margin-left:10px;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading top-bar">
                        <div class="col-md-8 col-xs-8">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Soporte</h3>
                        </div>
                        <div class="col-md-4 col-xs-4" style="text-align: right;">
                            <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                            <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                        </div>
                    </div>
                    <div id="chat_content" class="panel-body msg_container_base">

                    </div>
                    <div class="panel-footer">
                        <form id="form">
                            <div class="input-group">
                                <input autocomplete="off" id="m" type="text" class="form-control input-sm chat_input" placeholder="Escriba su mensaje" />
                                <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm" id="btn-chat">Enviar</button>
                                </span>
                            </div>
                            <input id='from' value="{{\Illuminate\Support\Facades\Session::get('_token')}}" type="hidden" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div id="cha" class="panel panel-warning" >--}}

{{--</div>--}}

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
        $('#m').val('');

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

            $('#'+from+' .msg').attr('data-id',from).append(msg.msg);
            cant = cant + 1;


        }else {

            $('#'+to+' .msg').attr('data-id',from).append(msg.msg);

        }

        $('#chat_label').html('<div class="pull-right label label-success">'+cant+'</div>');


        // $('#'+from+'.msg').attr('data-id',from).append(msg.msg);
        //$('#messages').append($('<li>').text(msg.msg));
    });


    function new_chat(client){

        return '<div id="'+client+'">' +
                    '<ul class="msg"></ul>' +
                    '<input type="hidden" id="to" value="'+client+'" >' +
                    '<input id="text" type="text"  >' +
                    '<a href="javascript:void(0);" class="send" data-to="'+client+'">Send</a> ' +
                '</div>';

        //return '<div id="new_chat" class="client col-xs-4"  data-id="'+client+'"><h4>Chat Nuevo</h4> <ul id="messages"></ul> <div  class="formChat"> <input id="m" autocomplete="off" /><input id="to" value="'+client+'" /><a href="javascript:void(0);" class="send" data-to="'+client+'">Send</a> </div> </div>';
    }
</script>

