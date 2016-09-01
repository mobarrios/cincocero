
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

@section('js')
    <script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script>
        // var socket = io.connect('http://62.210.13.249:3000');

        //var socket = io.connect('localhost:3000');
        var socket = io.connect( '{!!  env('SOCKET_URL') !!}' +':'+'{!!  env('SOCKET_PORT') !!}');

        $('form').submit(function(){

            var msg = {
                to   : 'admin',
                from : $('#from').val() ,
                text : $('#m').val()
            }

            socket.emit('chat message',  msg );

            $('#m').val('');
            return false;
        });

        socket.on('chat message', function(msg){

            if(msg.from == $('#from').val() || msg.to == $('#from').val()){

                if(msg.from == $('#from').val()){
                    $('#chat_content').append(chat_user(msg.msg));
                }
                if(msg.from == 'administrador'){
                    $('#chat_content').append(chat_admin(msg.msg));
                }
            }

        });


        function chat_user(msg )
        {
            return   '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"> <div class="messages msg_sent"> <p>'+msg+'.</p> <time datetime="2009-11-13T20:00">Usuario • Hace 1 minuto</time> </div> </div> <div class="col-md-2 col-xs-2 avatar"> <img src="assets/web/img/chat-user.jpg" class=" img-responsive "> </div> </div>';
        }

        function chat_admin(msg )
        {
            return '<div class="row msg_container base_receive"> <div class="col-md-2 col-xs-2 avatar"> <img src="assets/web/img/chat-soporte.jpg" class=" img-responsive "> </div> <div class="col-md-10 col-xs-10"> <div class="messages msg_receive"> <p> '+msg+'</p> <time datetime="2009-11-13T20:00">Soporte • Ahora</time> </div> </div> </div>';
        }
    </script>

@endsection
