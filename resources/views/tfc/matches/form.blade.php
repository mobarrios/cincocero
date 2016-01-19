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
            {!! Form::textCustom('home_teams_id', 'Equipo 1', $model->homeTeam->name)!!}
            {!! Form::textCustom('away_teams_id', 'Equipo 2', $model->awayTeam->name)!!}
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