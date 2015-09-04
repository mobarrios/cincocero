@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Nombre Establecieminto')!!}

        {!! Form::textCustom('address', 'Dirección')!!}
        {!! Form::textCustom('web', 'Web')!!}

        {!! Form::selectCustom('establecimientos_types_id','Tipo', $types)!!}



        {!! Form::label('Imagen')!!}
        {!! Form::file('image')!!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop