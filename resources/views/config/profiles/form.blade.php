@extends('config/config')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id]])!!}
        @else
            {!! Form::open(['route' => $routePostNew ]) !!}
        @endif

        {!! Form::label('Perfil') !!}
        {!! Form::text('profile',null, ['class'=>'form-control']) !!}
        {!! Form::textCustom('home','Ruta Home') !!}

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}

        {!! Form::close()!!}

    @endsection

@stop