@extends('index')
    @section('css')
        <link href="assets/css/chat.css" rel="stylesheet"/>
        <script src="../public/assets/js/angular/app.js"></script>
    @endsection

    @section('content')
        <div class="panel" ng-app="chatEc" >

    <!--
            <button ng-controller="connect as conn" ng-click="conn.getConnect()" class="btn btn-success">Connect</button>
            <button ng-controller="connect as conn" ng-click="conn.getDisconnect('administrador')" class="btn btn-danger">Disconnect</button>
    -->
            {{--<div class=" panel-heading">--}}
                {{--<a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>--}}
                {{--<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-file-excel-o"></i> </button>--}}
                {{--<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>--}}
            {{--</div>--}}

            <div class=" panel-body" ng-controller="ChatController as chat">


                <div class="col-xs-4"  ng-repeat="product in chat.products" >

                    <input id='from'  ng-model="token" value="dasdsa" type="hidden" >

                    <div class="panel panel-default">
                        <div class="panel-heading chat-header">
                            <div class="col-xs-6">
                                <p class="panel-title"><span class="fa fa-comment"></span> Chat </p>
                            </div>
                            <button ng-click="chat.close(product.token)" class="pull-right btn btn-xs btn-default" title="cerrar chat"><span class="fa fa-sign-out"></span></button>

                        </div>

                        <div class="panel-body chat_content">
                            <h4>@{{ product.token }}</h4>
                            <h5>Comienzo :  <small>@{{ product.created_at }}</small></h5>
                            <ul ng-repeat="msg in product.chats_messages">

                                    <li> @{{ msg.clients_msg }}</li>
                                    <li> @{{ msg.users_msg }}
                                        <br><small>@{{ msg.created_at }}</small>
                                    </li>
                            </ul>

                        </div>
                        <div class="panel-footer">
                            <form id="form">
                                <div class="input-group">
                                    <input ng-model="product.msg" autocomplete="off" id="m" type="text" class="form-control input-sm chat_input" placeholder="Escriba su mensaje" />
                                        <span class="input-group-btn">
                                        <button  class="btn btn-primary btn-sm" id="btn-chat" ng-click="chat.sendMessage(product.token, product.msg )">Enviar</button>
                                        </span>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>


               {{-- @include('controls.chat') --}}
            </div>
        </div>

    @endsection
    @section('js')
        <script src="../../../../public/assets/js/chat.js"></script>


        <script>
            /*
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
            */
        </script>
    @endsection

@stop

