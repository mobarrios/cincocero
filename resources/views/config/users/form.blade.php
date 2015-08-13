@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id]])!!}
        @else
            {!! Form::open(['route' => $routePostNew ]) !!}
        @endif

        {!! Form::text('name') !!}

        {!! Form::text('last_name') !!}
        {!! Form::email('email') !!}
        {!! Form::select('profiles_id', $profiles) !!}
        {!! Form::password('password') !!}




        {!! Form::submit('save')!!}
        {!! Form::close()!!}

    @endsection

@stop