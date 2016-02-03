@extends('index')

@section('content')

{!! Form::model($match , ['route'=>'matchesPostResult','id'=>'form']) !!}

{!! Form::hidden('matches_id', $match->id) !!}


<div class="row">
    <div class="table-responsive col-xs-6">
        <h3 class="text-center">{{$match->HomeTeam->name}} {!! Form::text('home_goals',null,['size'=>'1','id'=>'home_goals']) !!}</h3>

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
                                <input class="home_player_goals" type="text" size="1" name="goals[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->goals or '0' }}"> </td>
                            <td>
                                <input class="home_player_yellow" type="text" size="1" name="yellow[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->yellow or '0' }}"> </td>
                            </td>
                            <td>
                                <input class="home_player_red" type="text" size="1" name="red[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->red or '0' }}"> </td>
                            </td>

                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    <div class="table-responsive col-xs-6">
        <h3 class="text-center">{!! Form::text('away_goals',null,['size'=>'1','id'=>'away_goals']) !!} {{$match->AwayTeam->name}} </h3>
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
                        <input class="away_player_goals" type="text" size="1" name="goals[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->goals or '0' }}"> </td>
                    <td>
                        <input class="away_player_yellow" type="text" size="1" name="yellow[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->yellow or '0' }}"> </td>
                    </td>
                    <td>
                        <input class="away_player_red" type="text" size="1" name="red[{{$player->id}}]" value="{{$match->detailByPlayer($player->id)->first()->red or '0' }}"> </td>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    @if($match->status == 1)
    <div class="col-xs-12"><hr></div>

    <div class="col-xs-12">
        <label>WalkOver</label>
        {!! Form::checkbox('walk_over',null,null, ['id'=>'walkover'])!!}
        <div class="walk_div" hidden="true">

            {!! Form::text('walk_over_motivo',null,['class'=>'form-control','placeholder'=>'Motivo del Walkover']) !!}

            <label>Puntos no asignado a ningun equipo</label>
            {!! Form::checkbox('walk_over_no_ptos',null,null,['id'=>'walk_over_no_ptos'])!!}
        </div>
    </div>

    <div class="col-xs-12"><br></div>


    <div class="col-xs-12">
        <input type="submit" class="btn btn-block btn-default" value="Cargar Resultado" >
        <br>
    </div>
    @endif

</div>
{!! Form::close()!!}
@endsection

    @section('js')
        <script>

            $('#walkover').on('change',function(){

                if($(this).is(':checked'))
                {
                    $('.walk_div').attr('hidden',false);
                }
                else
                {
                    $('.walk_div').attr('hidden',true);
                }

            });

            //validation total goals home
            $('.home_player_goals').on('change',function(){
                var sum = 0;

                $('.home_player_goals').each(function () {
                    sum = parseInt(sum) + parseInt($(this).val());
                });

               if(sum > $('#home_goals').val() || $(this).val() > $('#home_goals').val())
               {
                   alert('la cantidad de goles supera el total del equipo !');
                   $(this).val(0);
               }
            });

            //validation total goals away
            $('.away_player_goals').on('change',function(){
                var sum = 0;

                $('.away_player_goals').each(function () {
                    sum = parseInt(sum) + parseInt($(this).val());
                });

                if(sum > $('#away_goals').val() || $(this).val() > $('#away_goals').val())
                {
                    alert('la cantidad de goles supera el total del equipo !');
                    $(this).val(0);
                }
            });

            // validation yellow card
            $('.home_player_yellow').on('change',function(){
                if($(this).val() > 2 )
                {
                    alert('Las amarillas no pueden ser mas de  2');
                    $(this).val(0);
                }
            });

            $('.away_player_yellow').on('change',function(){
                if($(this).val() > 2 )
                {
                    alert('Las amarillas no pueden ser mas de  2');
                    $(this).val(0);
                }
            });

            //validation red card
            $('.home_player_red').on('change',function(){
                if($(this).val() > 1 )
                {
                    alert('Las red no pueden ser mas de  1');
                    $(this).val(0);
                }
            });

            $('.away_player_red').on('change',function(){
                if($(this).val() > 1 )
                {
                    alert('Las rojas no pueden ser mas de  1');
                    $(this).val(0);
                }
            });



        </script>
    @endsection
@stop

