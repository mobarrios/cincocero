var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);



io.on('connection', function(socket){
    socket.on('chat message', function(msg){
        m = msg.from +':' + msg.text;

        io.emit('chat message', m );
    });
});

http.listen(3000, function(){
    console.log('listening on *:3000');
});
