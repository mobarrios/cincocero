@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Nro. Partido')!!}
        {!! Form::dateCustom('date', 'Fecha')!!}
        {!! Form::selectCustom('hour', 'Hora',$hour)!!}


        @if(isset($model))
            @if($fases->play_off == true)
                {!! Form::selectCustomEdit('home_teams_id','Equipo 1',$teams,null)!!}
                {!! Form::selectCustomEdit('away_teams_id','Equipo 2',$teams,null)!!}
            @else
                @if(is_null($model->homeTeam))
                    {!! Form::textCustom('home_teams_id', "Libre", 'Equipo 1')!!}
                @else
                    {!! Form::textCustom('home_teams_id', $model->homeTeam->name, 'Equipo 1')!!}
                @endif
                @if(is_null($model->awayTeam))
                    {!! Form::textCustom('away_teams_id', "Libre", 'Equipo 2')!!}
                @else
                    {!! Form::textCustom('away_teams_id', $model->awayTeam->name, 'Equipo 2')!!}
                @endif
            @endif
        @else
                {!! Form::textCustom('home_teams_id', 'Equipo 1')!!}
                {!! Form::textCustom('away_teams_id', 'Equipo 2')!!}
        @endif

        {!! Form::selectCustom('status', 'Estado', $status)!!}
        @if(isset($model) && !is_null($model->canchas))
            {!! Form::selectCustom('sedes_id','Sede',$sedes,$model->canchas->sedes->id)!!}
        @else
            {!! Form::selectCustom('sedes_id','Sede',$sedes,\App\Entities\soffem\Sedes::first()->id)!!}
        @endif
        @if(isset($model) && !is_null($model->canchas) && !is_null($model->canchas->sedes))
            {!! Form::selectCustom('canchas_id','Cancha',$canchasEdit->where('sedes_id',$model->canchas->sedes->id)->lists('name','id'),$model->canchas->id) !!}
        @else
            {!! Form::selectCustom('canchas_id','Cancha',$canchas) !!}
        @endif

        {!! Form::hidden('fases_id',$fases_id) !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection
    @section('js')
        <script src="assets/web/js/cambiarCancha.js"></script>
    @endsection
@stop