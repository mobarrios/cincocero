@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id]])!!}
        @else
            {!! Form::open(['route' => $routePostNew ]) !!}
        @endif

        {!! Form::text('data1') !!}

        {!! Form::text('data2') !!}


        {!! Form::submit('save')!!}
        {!! Form::close()!!}

    @endsection

@stop