@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::textCustom('name', 'Nombre Juagdor')!!}
        {!! Form::textCustom('last_name', 'Apellido Juagdor')!!}
        {!! Form::textCustom('mail', 'Mail ')!!}
        {!! Form::textCustom('phone', 'Tel. ')!!}
        {!! Form::textCustom('cel', 'Cel. ')!!}





        {!! Form::imageCustom('image','Imagen')!!}
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop