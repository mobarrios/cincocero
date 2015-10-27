@extends('config/config')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id]])!!}
        @else
            {!! Form::open(['route' => $routePostNew ]) !!}
        @endif

        {!! Form::textCustom('name', 'Menu')!!}

        {!! Form::selectCustom('main', 'Main', $main ) !!}
        {!! Form::textCustom('routes', 'Menu')!!}
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop