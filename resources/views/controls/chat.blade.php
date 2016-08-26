

<div id="cha" class="panel panel-warning" >

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
        $('#m').val('');

        return false;

    });



    socket.on('chat message', function(msg){

        var from    = msg.from;
        var to      = msg.to;

        //AGREGAGO NUEVO CHAT SI NO ESTA ACTIVO
        if(from != 'administrador'){

            console.log($('#'+from+'').length );
            if($('#'+from+'').length != 1){
                $('#cha').append(new_chat(from));
            }

            $('#'+from+' .msg').attr('data-id',from).append(msg.msg);

        }else {

            $('#'+to+' .msg').attr('data-id',from).append(msg.msg);

        }


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

