@extends('template/template')

    @section('menu')
        @include('template/navBar')
    @endsection

    @section('side')
        @include('template/side')
    @endsection

    @section('mainContent')

        <div class="panel panel-default">
            <div class="panel-heading ">
                {{$sectionName}}
            </div>
            <div class="panel-body">
                @yield('content')
            </div>
        </div>

    @endsection
@stop