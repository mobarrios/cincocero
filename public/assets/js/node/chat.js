var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

/*
io.on('connection', function(socket){

    console.log('conectado');

    socket.on('chat message', function(msg){
        //m = msg.from +':' + msg.text;

        m = {   to : msg.to,
                from: msg.from ,
                msg : msg.text
            };

        console.log(m);
        io.emit('chat message', m);
    });


});
*/

io.on('connection', function(socket){

    console.log('a user connected: ' + socket.id);

    socket.on('disconnect', function(){
        console.log( socket.name + ' has disconnected from the chat.' + socket.id);
    });

    socket.on('join', function (name) {
        socket.name = name;
        console.log(socket.name + ' joined the chat.');
    });

    socket.on('chat message', function(msg){
        //m = msg.from +':' + msg.text;

        m = {
                to  : msg.to,
                from: msg.from ,
                msg : msg.text
            };

        console.log(m);
        io.emit('chat message', m);
    });
});


http.listen(3000,function(){
    console.log('listening on *:3000');
});
