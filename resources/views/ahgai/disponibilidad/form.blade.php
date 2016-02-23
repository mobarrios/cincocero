@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::selectCustom('rooms_types_id', 'Habitación',$rooms)!!}
        {!! Form::dateCustom('from', 'Fecha Desde')!!}
        {!! Form::dateCustom('to', 'Fecha Hasta')!!}




        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop