

<ul id="messages"></ul>
<form action="">
    <input id="m" autocomplete="off" /><button>Send</button>
    <input id='from' type="text" >
</form>

<script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script>
    var socket = io.connect('http://62.210.13.249:3000');

    $('form').submit(function(){
        var msg = {from : $('#from').val() , text : $('#m').val()}
        socket.emit('chat message',  msg );
        $('#m').val('');
        return false;
    });
    socket.on('chat message', function(msg){
        $('#messages').append($('<li>').text(msg));
    });
</script>
