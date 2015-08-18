@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id]])!!}
        @else
            {!! Form::open(['route' => $routePostNew ]) !!}
        @endif

        {!! Form::label('Codigo')!!}
        {!! Form::text('code',null,['class'=>'form-control']) !!}
        {!! Form::label('Articulo')!!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
        {!! Form::label('Descripcion')!!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop