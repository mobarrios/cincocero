@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id] ,'files' => true ])!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files' => true]) !!}
        @endif


        {!! Form::imageCustom('image','Foto') !!}

        {!! Form::textCustom('name','Nombre')!!}

        {!! Form::textCustom('last_name','Apellido')!!}



        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop