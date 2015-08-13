@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id]])!!}
        @else
            {!! Form::open(['route' => $routePostNew ]) !!}
        @endif

        {!! Form::text('name') !!}



        {!! Form::submit('save')!!}
        {!! Form::close()!!}

    @endsection

@stop