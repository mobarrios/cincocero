(function() {

    var app = angular.module('chatEc', []);

    //var socket = io.connect( "http://localhost:3000");

        /*
        app.controller('connect',['$http',function($http){


            this.getConnect = function(){

                console.log('conectado');
               // return socket;

                socket.on('chat message',function(msg){

                   if(msg.from != 'administrador') {

                            $http.get('newChat',{params:{token : msg.from}});
                            $http.get('addMessageClient', {params: {token: msg.from, message: msg.msg}});

                        console.log('mensaje añadido');
                    }else{

                       $http.get('addMessageUser', {params: {token: msg.token, message: msg.msg}});

                   }

                });
            };


            this.getDisconnect = function(){

                socket.disconnect();
                console.log('desconectado' + socket.id);

            };

            this.sendMessage = function(token , msg){

                var message = {
                    from : 'administrador' ,
                    text :  msg,
                    to   :  token,
                }

                socket.emit('chat message', message);

                $http.get('addMessageUser',{params:{token: token, message :msg }});


                console.log('mensaje enviado');
            };



        }]);
*/
        app.controller('ChatController', ['$http','$scope','socket' , function($http ,$scope,socket){

            var store   =  this;

            store.products =  this.products = [];

            // toma data de route
            $http.get('activeChats').success(function(data){
                store.products = data;
            });


            //socket listen
            socket.on('chat message',function(msg){

                if(msg.to == 'admin') {

                    $http.get('newChat',{params:{token : msg.from}});

                    $http.get('addMessageClient', {params: {token: msg.from, message: msg.msg}});
                    console.log(msg);

                }else{

                    $http.get('addMessageUser', {params: {token: msg.to, message: msg.msg}});
                    console.log(msg);
                }


            });



            //send message
            store.sendMessage = function(to , msg){

                var message = {
                    from : 'admin' ,
                    text :  msg,
                    to   :  to,
                }

                socket.emit('chat message', message);

                $http.get('addMessageUser',{ params:{token: to,  message :msg }});

            };

            // close chat
            store.close = function(token){
                $http.get('endChat',{params:{token:token}});

            };



        }]);


        app.factory('socket',function(){

            var socket = io.connect( "http://localhost:3000");

            return socket;
        });

})();



