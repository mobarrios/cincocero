@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::hidden('tournaments_id', $tournaments_id) !!}
        {!! Form::textCustom('name', 'Nombre Fase')!!}

        {!! Form::label('Equipos Participantes')!!}

        <table class="table table-striped" >
            @foreach($teams as $team)
                <tr>
                    <td><input type="checkbox" id="{{$team->id}}" name="team[]" value="{{$team->id}}" ></td>
                    <td>{{$team->name}}</td>
                </tr>
            @endforeach
        </table>

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop