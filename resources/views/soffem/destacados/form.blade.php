@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::hidden('fases_week_id',\Illuminate\Support\Facades\Session::get('fases_week_id')) !!}
        {!! Form::selectCustom('players_id','Jugador Destacado',$players)!!}
        {!! Form::selectCustom('teams_id','Equipo Destacado',$teams)!!}

        {!! Form::textAreaCustom('nota','Observaciones') !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection


@section('js')
    <script>
        $("select[name=players_id]").on('change',function(){
            if($("select[name=teams_id]").val() != 0)
                alert('seleccionar un Jugador o un Equipo a la vez.');
        });

        $("select[name=teams_id]").on('change',function(){
            if($("select[name=players_id]").val() != 0)
                alert('seleccionar un Jugador o un Equipo a la vez.');
        });
    </script>
@endsection

@stop