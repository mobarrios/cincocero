@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::selectCustom('teams_id','Equipo',$teams) !!}

        {{-- Form::selectCustom('players_id','Jugador Sancionado',$players) --}}
        <select name="players_id" id="players" class="form-control">

        </select>

        {!! Form::selectCustom('sancion','Sanción',$sancionesDetails)!!}


        <label>Cantidad de Fechas</label>
        <input name="cantidad_fechas" type="number" min="1"  max="{{$max}}" class="form-control">

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

    @section('js')
        <script>



            $("select[name='teams_id']").on('change',function() {

                $('#players').html('');

                var teams_id = $(this).val();

                $.ajax({url: "search/playersByTeams/"+teams_id,
                    success: function(result)
                    {
                        $.each(result, function(key,value){

                            $('#players').append('<option value='+value['id']+' >'+value['last_name']+' '+value['name']+'</option>');
                            console.log(value['id']);
                        });
                    }
                });

            });
        </script>
    @endsection

@stop