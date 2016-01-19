@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::selectCustom('players_id','Jugador Sancionado',$players)!!}
        {!! Form::textAreaCustom('sancion','Sanción')!!}

        {!! Form::selectCustom('end_fases_week_id','Fecha Limite Sanción',$weeks)!!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop