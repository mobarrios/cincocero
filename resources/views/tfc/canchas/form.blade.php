@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Nombre de Cancha')!!}


        {!! Form::selectCustom('sedes_id','Sede',$sedes)!!}


        {!! Form::imageCustom('image','Foto')!!}

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop