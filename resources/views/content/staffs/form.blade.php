@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id] ,'files' => true ])!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files' => true]) !!}
        @endif


        {!! Form::label('Imagen')!!}
        {!! Form::file('image') !!}

        {!! Form::label('Nombre')!!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

        {!! Form::label('Apellido')!!}
        {!! Form::text('last_name',null,['class'=>'form-control']) !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop