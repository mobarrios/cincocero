@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::imageCustom('image','Foto')!!}
        {!! Form::dateCustom('date','Fecha')!!}


        {!! Form::textCustom('name', 'Nombre de la foto')!!}
        {!! Form::textAreaCustom('detail','Detalle') !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop