@extends('index')

    @section('content')

        <div class="panel">
            <div class="panel-body">
                <h3>{{strtoupper($client->full_name)}}</h3>
                <h5><strong>DNI </strong> {{strtoupper($client->dni)}}</h5>
                <h5><strong>Direccion </strong>  {{$client->address}}</h5>
                <h5><strong>Email </strong> {{$client->email}}</h5>
                <h5><strong>Tel. / Cel. </strong>  {{$client->phone}} {{$client->cell_phone}}</h5>
                <hr>

                <label>Producto</label>
                <div class="input-group">
                    <input id="txt_search" type="text" class="form-control" name="Number" placeholder="Buscar Producto" required="">
                    <span class="btn_search input-group-addon"><i class="fa fa-search"></i></span>
                </div>
                <div class="data">

                </div>


                <div ng-controller="MyController">
                    Your name:
                    <input type="text" ng-model="username">
                    <button ng-click='sayHello()'>greet</button>
                    <hr>
                    @{{greeting}}
                </div>


                </div>



            </div>

            <div class="panel-footer">


            {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
            {!! Form::close()!!}

            </div>

        </div>

    @endsection

    @section('js')


        <script>

            angular.module('scopeExample', [])
                    .controller('MyController', ['$scope', function($scope) {
                        $scope.username = 'World';

                        $scope.sayHello = function() {
                            $scope.greeting = 'Hello ' + $scope.username + '!';
                        };
                    }]);


            $('.btn_search').on('click',function(){
               var text = $('#txt_search').val();

                $.get('budgets_search/'+text, function(res){

                    $.each(res,function(k,v){
                        console.log(v['name']);
                        $('.data').append('<li>'+v['brands']['name']+'-'+v['name']+'</li>');
                    });
                });

            });
        </script>
    @endsection

@stop