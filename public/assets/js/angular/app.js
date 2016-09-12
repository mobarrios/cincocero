(function() {

    var app = angular.module('chatEc', []);

    app.controller('ChatController', ['$http', function($http){

        var store =  this;
        store.products =  this.products = [];

        // toma data de route
        $http.get('activeChats').success(function(data){
            store.products = data;

        });

    }]);

})();



