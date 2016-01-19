@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Nro. Partido')!!}
        {!! Form::dateCustom('date', 'Fecha')!!}
        {!! Form::textCustom('hour', 'Hora')!!}
        {!! Form::textCustom('name', 'Nro. Partido')!!}

        @if(isset($model))
            {!! Form::textCustomEdit('home_teams_id', $model->homeTeam->name, 'Equipo 1')!!}
            {!! Form::textCustomEdit('away_teams_id', $model->awayTeam->name, 'Equipo 2')!!}
{{--            {!! Form::textCustom('away_teams_id', 'Equipo 2', $model->awayTeam->name,['disabled' => 'disabled'])!!}--}}
        @else
            {!! Form::textCustom('home_teams_id', 'Equipo 1')!!}
            {!! Form::textCustom('away_teams_id', 'Equipo 2')!!}
        @endif

        {!! Form::selectCustom('status', 'Estado', $status)!!}

        {!! Form::selectCustom('canchas_id','Cancha',$canchas)!!}

        {!! Form::hidden('fases_id',$fases_id) !!}






        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop