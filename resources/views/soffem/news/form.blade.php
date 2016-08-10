@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::imageCustom('image','Foto')!!}
        {!! Form::dateCustom('date','Fecha')!!}


        {!! Form::textCustom('title', 'Tìtulo Noticia')!!}
        {!! Form::textCustom('description', 'Descripción Noticia')!!}
        {!! Form::textAreaCustom('detail','Detalle') !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop