@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif
        {!! Form::textCustom('dni', 'DNI')!!}
        {!! Form::textCustom('last_name', 'Apellido')!!}
        {!! Form::textCustom('name', 'Nombre')!!}
        {!! Form::textCustom('mail', 'E-Mail')!!}
        {!! Form::dateCustom('dob', 'Fecha de Nacimiento')!!}
        {!! Form::textCustom('address', 'Dirección')!!}
        {!! Form::textCustom('phone', 'Telefono')!!}
        {!! Form::textCustom('cel', 'Celular')!!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop