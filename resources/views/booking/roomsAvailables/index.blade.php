@extends('index')

    @section('content')
        <div class="col-xs-12">

            <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
        </div>

                @include('controls.table')

    @endsection

@stop

