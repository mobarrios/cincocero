@extends('index')

@section('content')

{!! Form::open(['route'=>'matchesPostResult']) !!}

{!! Form::hidden('matches_id', $match->id) !!}


<div class="row">
    <div class="table-responsive col-xs-6">
        <h3 class="text-center">{{$match->HomeTeam->name}} <input type="text" size="1" name="home_goals"></h3>

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
                            <td><input type="text" size="1"> </td>
                            <td><input type="checkbox"> </td>
                            <td><input type="checkbox"> </td>

                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    <div class="table-responsive col-xs-6">
        <h3 class="text-center"><input type="text" size="1" name="away_goals"> {{$match->AwayTeam->name}} </h3>
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
                    <td><input type="text" size="1"> </td>
                    <td><input type="checkbox"> </td>
                    <td><input type="checkbox"> </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-xs-12">
        <input type="submit" class="btn btn-block btn-default" value="Cargar Resultado" >
    </div>

</div>
{!! Form::close()!!}
@endsection

@stop

