@extends('index')

    @section('content')

<<<<<<< HEAD
        <div class="row">
            <div class="col-xs-12">
                <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
            </div>
            <hr>
            <div class="col-xs-12">
                @include('controls.table')
            </div>
        </div>


=======
                <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
                @include('controls.table')
>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b

    @endsection

@stop

