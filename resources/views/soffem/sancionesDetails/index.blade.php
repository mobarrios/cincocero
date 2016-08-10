@extends('index')

@section('content')
    <div class="col-xs-12">
        <a href="{{route($routeNew)}}"  class=" btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
    </div>

    <hr>

    @include('controls.table')

@endsection

@stop

