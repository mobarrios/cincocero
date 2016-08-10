@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>['tournamentsDestacadosPlayersPostNew',$model->id], 'files' =>'true'] )!!}
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$model->Players->Images->first()->image or 'aa'}}">
                        <h3> {{$model->Players->fullName}}</h3>
                    </div>
                </div>
            </div>
        @else
            {!! Form::open(['route' => 'tournamentsDestacadosPlayersPostNew' , 'files'=>'true']) !!}
        @endif

        {!! Form::selectCustom('teams_id','Equipo',$teams) !!}

        {{-- Form::selectCustom('players_id','Jugador Sancionado',$players) --}}
        <select name="players_id" id="players" class="form-control">
        </select>

        {!! Form::textAreaCustom('observations','Observaciones') !!}

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