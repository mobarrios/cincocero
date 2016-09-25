@extends('template.template')
@section('content')

    <div id="cha" >

    </div>
    <div id="chat">
        <div class="container">


        @foreach($chats as $chat)
                <div class="col-xs-3" style="margin-left:10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading ">
                                <div class="col-xs-6">
                                    <p class="panel-title"><span class="fa fa-comment"></span> Chat </p>
                                </div>

                                <div class=" col-xs-4 pull-right btn-group">
                                    <a href="#" class="btn btn-default btn-xs"><span class="fa fa-minus"></span></a>
                                    <a href="#" class="btn btn-default btn-xs"><span class="fa fa-remove"></span></a>
                                </div>

                            </div>

                            <div id="chat_content" class="panel-body ">

                                <h5>Comienzo :  <small>{{$chat->created_at}}</small></h5>
                                   <ul>
                                    @foreach($chat->ChatsMessages as $message)
                                        @if($message->clients_msg != '')
                                            <li><strong>Cliente:</strong>  {{$message->clients_msg}} <br><small>{{$message->created_at}}</small></li>
                                        @endif
                                        @if($message->users_msg != '')
                                            <li><strong>{{\App\Entities\User::find(\Illuminate\Support\Facades\Auth::user()->id)->fullName}}:</strong>  {{$message->users_msg}}
                                                <br><small>{{$message->created_at}}</small>
                                            </li>
                                        @endif
                                     @endforeach
                                   </ul>

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

    @endforeach

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
        $(this).parent().find("#text").val('');

        return false;

    });


    var cant    = 0;

    socket.on('chat message', function(msg){
2
        var from    = msg.from;
        var to      = msg.to;



        //AGREGAGO NUEVO CHAT SI NO ESTA ACTIVO
        if(from != 'administrador'){

            if($('#'+from+'').length != 1){
                $('#cha').append(new_chat(from));

                $.get('newChat',{token:from}, function(data){
                    console.log(data);
                });
            }

            $('#'+from+' .msg').attr('data-id',from).append('<li>cliente:'+msg.msg+'</li>');

            $.get('addMessageClient',{token:from , message:msg.msg});

            cant = cant + 1;


        }else {

            $('#'+to+' .msg').attr('data-id',from).append('<li>'+msg.msg+':yo</li>');
            $.get('addMessageUser',{token:to , message:msg.msg});


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
                    '<a href="javascript:void(0);" class="close btn btn-default" data-to="'+client+'">cerrar</a> ' +
                    '<div>'+
                '</div>'+
                '</div>';

        //return '<div id="new_chat" class="client col-xs-4"  data-id="'+client+'"><h4>Chat Nuevo</h4> <ul id="messages"></ul> <div  class="formChat"> <input id="m" autocomplete="off" /><input id="to" value="'+client+'" /><a href="javascript:void(0);" class="send" data-to="'+client+'">Send</a> </div> </div>';
    }
</script>
@endsection
