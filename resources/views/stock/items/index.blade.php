@extends('index')

    @section('content')

                <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
                @include('controls.table')

    @endsection

@stop

