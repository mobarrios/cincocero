@extends('index')

    @section('content')



                @include('controls.table')

                <hr>


                <a href="{{route($routeNew)}}"  class=" btn btn-block btn-default">{{trans('messages.btnNew')}}</a>


    @endsection

@stop

