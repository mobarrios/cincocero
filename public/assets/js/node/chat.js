var app  = require('express')();
var http = require('http').Server(app);
var io   = require('socket.io')(http);

var clients = {};
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

/*
io.on('disconnect',function(socket){

    if (io.sockets.sockets[socket.id])
        io.sockets.sockets[socket.id].disconnect();

    console.log( socket.id + ' has disconnected from the chat.');
});
*/

io.on('connection', function(socket){

    clients['id'] =  socket.id;

    console.log(clients);

    socket.on('disconnect', function(socket){

            console.log( socket.name + ' has disconnected from the chat.');
    });

    socket.on('join', function (name) {
        socket.name = name;
        console.log(socket.name + ' joined the chat.');
    });

    socket.on('chat message', function(msg){

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
