@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            {!! Form::hidden('tournaments_id', $tournaments_id) !!}
        @endif



        {!! Form::textCustom('name', 'Nombre Fase')!!}

        @if(!isset($model))

            {!! Form::label('Equipos Participantes')!!}

            <table class="table table-striped" >
                @foreach($teams as $team)
                    <?php $check = "" ?>
                    <tr>
                        <td>
                            @if(isset($model))
                                @foreach($model->Teams as $team_fase)

                                    @if($team_fase->id == $team->id)
                                        <?php $check = 'checked'?>
                                    @endif

                                @endforeach
                            @endif

                            <input  {{$check}}  type="checkbox" id="{{$team->id}}" name="team[]" value="{{$team->id}}" >

                        </td>
                        <td>{{$team->name}}</td>
                    </tr>

                @endforeach
            </table>

        @endif
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop