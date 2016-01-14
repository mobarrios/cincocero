@extends('index')

@section('content')

{!! Form::model($match , ['route'=>'matchesPostResult']) !!}

{!! Form::hidden('matches_id', $match->id) !!}


<div class="row">
    <div class="table-responsive col-xs-6">
        <h3 class="text-center">{{$match->HomeTeam->name}} {!! Form::text('home_goals',null,['size'=>'1']) !!}</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Gol</th>
                    <th>Amarilla</th>
                    <th>Roja</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($match->HomeTeam->PlayersList()  as $player)
                        <tr>
                            <td>
                                 {{$player->FullName()}}
                            </td>
                            <td>
                                <input type="text" size="1" name="goals[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->goals or '0' }}"> </td>
                            <td>
                                <input type="text" size="1" name="yellow[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->yellow or '0' }}"> </td>
                            </td>
                            <td>
                                <input type="text" size="1" name="red[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->red or '0' }}"> </td>
                            </td>

                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    <div class="table-responsive col-xs-6">
        <h3 class="text-center">{!! Form::text('away_goals',null,['size'=>'1']) !!} {{$match->AwayTeam->name}} </h3>
        <table class="table">
            <thead>
            <tr>
                <th>Jugador</th>
                <th>Gol</th>
                <th>Amarilla</th>
                <th>Roja</th>
            </tr>
            </thead>
            <tbody>
            @foreach($match->AwayTeam->PlayersList()  as $player)
                <tr>
                    <td>
                        {{$player->FullName()}}
                    </td>
                    <td>
                        <input type="text" size="1" name="goals[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->goals or '0' }}"> </td>
                    <td>
                        <input type="text" size="1" name="yellow[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->yellow or '0' }}"> </td>
                    </td>
                    <td>
                        <input type="text" size="1" name="red[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->red or '0' }}"> </td>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-xs-12"><hr></div>

    <div class="col-xs-12">
        <div class="'col-xs-3">
            <label>WalkOver</label>

            {!! Form::checkbox('walk_over',null,['id'=>'walkover'])!!}
            {!! Form::text('walk_over_motivo',null,['class'=>'form-control','placeholder'=>'Motivo del Walkover']) !!}

        </div>
    </div>

    <div class="col-xs-12"><br></div>

    <div class="col-xs-12">
        <input type="submit" class="btn btn-block btn-default" value="Cargar Resultado" >
        <br>
    </div>

</div>
{!! Form::close()!!}
@endsection


@stop

