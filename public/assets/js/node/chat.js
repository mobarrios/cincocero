var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
    res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
    socket.on('chat message', function(msg){
        m = msg.from +':' + msg.text;

        io.emit('chat message', m );
    });
});

http.listen(2222, function(){
    console.log('listening on *:2222');
});
