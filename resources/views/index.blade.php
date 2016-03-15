@extends('template/template')


    @section('side')
        @include('template/side')
    @endsection

    @section('menu')
        @include('template/menu')
    @endsection

    @section('mainContent')
        <h1 class="page-header">{{$sectionName}}</h1>

        <div class="panel panel-default">
            <div class="panel-body">
                @yield('content')
            </div>
        </div>

    @endsection
@stop