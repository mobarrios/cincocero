

<ul id="messages"></ul>
<form action="">
    <input id="m" autocomplete="off" /><button>Send</button>
</form>

<script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script>
   // var socket = io.connect('http://62.210.13.249:3000');

   var socket = io.connect('localhost:3000');

   socket.on('chat message', function(msg){

       console.log(msg);

       if(msg.to == $('#from').val()){
           $('#messages').append($('<li>').text(msg.msg));
       }

   });

    $('form').submit(function(){

        var msg = {
                    to   : $('#from').val() ,
                    from : 'admin' ,
                    text : $('#m').val()
                  }


        console.log(msg);

        socket.emit('chat message',  msg );

        $('#m').val('');
        return false;
    });


</script>
