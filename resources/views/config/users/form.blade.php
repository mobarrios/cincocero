@extends('config/config')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'])!!}
            {{\Illuminate\Support\Facades\Hash::make($model->id)}}
            {!! Form::hidden('old_email',$model->email)!!}

        @else
            {!! Form::open(['route' => $routePostNew ,'files' =>'true']) !!}
        @endif

        {!! Form::label('DNI') !!}
        {!! Form::text('dni',null,['class'=>'form-control']) !!}

        {!! Form::label('Nombre') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

        {!! Form::label('Apellido') !!}
        {!! Form::text('last_name',null,['class'=>'form-control']) !!}

        {!! Form::label('E-mail') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}

        {!! Form::label('Perfil') !!}
        {!! Form::select('profiles_id', $profiles,null,['class'=>'form-control']) !!}


        {!! Form::label('Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}

        {!! Form::label('Confirmar Password') !!}
        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}

        {!! Form::hidden('db',Auth::user()->db) !!}

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop