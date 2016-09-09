(function() {

    var app = angular.module('gemStore', []);

    app.controller('StoreController', ['$http', function($http){

        var store =  this;
        store.products =  this.products = [];

        // toma data de route
        $http.get('activeChats').success(function(data){
            store.products = data;

        });

    }]);

})();



