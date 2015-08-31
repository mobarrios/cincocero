@extends('index')

    @section('content')

        <div class="row">
            <div class="col-xs-12">
                <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
            </div>
            <hr>
            <div class="col-xs-12">
                @include('controls.table')
            </div>
        </div>



    @endsection

@stop

