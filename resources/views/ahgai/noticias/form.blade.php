@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::dateCustom('date','Fecha Publicacion')!!}
        {!! Form::textCustom('title', 'Título')!!}

        {!! Form::textCustom('copete', 'Breve Descripción')!!}

        {!! Form::textAreaCustom('description', 'Descripción Completa')!!}


        {!! Form::imageCustom('image','Fotos') !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop