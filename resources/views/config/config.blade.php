@extends('template/templateOK')

@section('menu')
    @include('config/navBarConfig')
@endsection

@section('mainContent')



    <div class=" panel-heading">{{$sectionName}}</div>
        <div class="panel panel-body">

           DATABASE : {{\Illuminate\Support\Facades\Auth::user()->db}}

            @yield('content')
        </div>



@endsection
@stop