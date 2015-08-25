@extends('template/template')

@section('menu')
    @include('config/navBarConfig')
@endsection

@section('mainContent')

    <div class="row">
        <div class="col-xs-12">
            <h4 class="page-header">{{$sectionName}}</h4>
        </div>
        <div class="col-xs-12">
            @yield('content')
        </div>
    </div>

@endsection
@stop