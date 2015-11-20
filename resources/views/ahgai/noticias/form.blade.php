@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

<<<<<<< HEAD:resources/views/ahgai/noticias/form.blade.php
        {!! Form::dateCustom('date','Fecha Publicacion')!!}
        {!! Form::textCustom('title', 'Título')!!}
=======
>>>>>>> 7ceaf2957db182baae062b8cc35e1833d7dab8f8:resources/views/stock/items/form.blade.php

        {!! Form::textCustom('copete', 'Breve Descripción')!!}

<<<<<<< HEAD:resources/views/ahgai/noticias/form.blade.php
        {!! Form::textAreaCustom('description', 'Descripción Completa')!!}
=======
>>>>>>> 7ceaf2957db182baae062b8cc35e1833d7dab8f8:resources/views/stock/items/form.blade.php



        {!! Form::imageCustom('image','Fotos') !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop