@extends('index')

@section('content')

    {!! Form::model($model, ['route'=>['userProfilePostEdit',$model->id],'files' =>'true'])!!}

    {!! Form::imageCustom('image','Foto')!!}

    {!! Form::label('Nombre') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}

    {!! Form::label('Apellido') !!}
    {!! Form::text('last_name',null,['class'=>'form-control']) !!}

    {!! Form::label('E-mail') !!}
    {!! Form::email('email',null,['disabled','class'=>'form-control']) !!}


    {!! Form::label('Password') !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'....']) !!}

    {!! Form::label('Confirmar Password') !!}
    {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'....']) !!}

    <hr>

    {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
    {!! Form::close()!!}

@endsection

@stop