@extends('index')

@section('content')
    <div class="panel">
        <div class="panel-body">

            {!! Form::model($model, ['route'=>['userProfilePostEdit',$model->id],'files' =>'true'])!!}

            {!! Form::imageCustom('image','Foto')!!}

            {!! Form::label('DNI') !!}
            {!! Form::email('dni',null,['disabled','class'=>'form-control']) !!}

            {!! Form::label('Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}

            {!! Form::label('Apellido') !!}
            {!! Form::text('last_name',null,['class'=>'form-control']) !!}

            {!! Form::label('E-mail') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}


            {!! Form::label('Password') !!}
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'....']) !!}

            {!! Form::label('Confirmar Password') !!}
            {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'....']) !!}

        </div>

        <div class="panel-footer">


            {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
            {!! Form::close()!!}
    </div>

@endsection

@stop