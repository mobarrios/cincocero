@extends('index')
@section('css')
    <link href="assets/css/chat.css" rel="stylesheet"/>
    <script src="../public/assets/js/angular/app.js"></script>
@endsection

    @section('content')
        <div class="panel ">



            {{--<div class=" panel-heading">--}}
                {{--<a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>--}}
                {{--<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-file-excel-o"></i> </button>--}}
                {{--<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>--}}
            {{--</div>--}}

            <div class=" panel-body"  ng-app="chatEc"  ng-controller="ChatController as chat">

                <div class="col-xs-4"  ng-repeat="product in chat.products" >

                    <div class="panel panel-default">
                        <div class="panel-heading chat-header">
                            <div class="col-xs-12">
                                <p class="panel-title"><span class="fa fa-comment"></span> Chat </p>
                            </div>


                        </div>

                        <div class="panel-body chat_content">

                            <h5>Comienzo :  <small>@{{ product.created_at }}</small></h5>
                            <ul ng-repeat="msg in product.chats_messages">

                                    <li> @{{ msg.clients_msg }}</li>
                                    <li> @{{ msg.users_msg }}
                                        <br><small>@{{ msg.created_at }}</small>
                                    </li>
                            </ul>

                        </div>
                        <div class="panel-footer">
                            <form id="form">
                                <div class="input-group">
                                    <input autocomplete="off" id="m" type="text" class="form-control input-sm chat_input" placeholder="Escriba su mensaje" />
                                        <span class="input-group-btn">
                                        <button class="btn btn-primary btn-sm" id="btn-chat">Enviar</button>
                                        </span>
                                </div>
                                <input id='from' value="{{\Illuminate\Support\Facades\Session::get('_token')}}" type="hidden" >
                            </form>
                        </div>
                    </div>

                </div>


               {{-- @include('controls.chat') --}}
            </div>
        </div>

    @endsection
@section('js')
    <script src="../../../../public/assets/js/chat.js"></script>
@endsection

@stop

