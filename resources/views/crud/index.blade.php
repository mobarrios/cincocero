@extends('index')

    @section('content')

        <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">New</a>

        @include('controls.table')

    @endsection

@stop

