@extends('index')

    @section('content')


        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}

            @if($model->second_round != 1)
                <a href="{{route('fases_vuelta',$model->id)}}" class="btn btn-xs btn-success" id="crear_vuelta">Crear Vuelta</a>
            @endif
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
        @else

            <table class="table table-striped">
                <thead>
                    <th>Equipos</th>
                    <th></th>
                </thead>
                <?php $ft = []?>
                    @foreach($model->Teams as $team)
                    <tr>
                        <td> {{$team->name}} </td>
                        <td>
                            <button class="cambiar"  data-id="{{$team->id}}" type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                                Cambiar
                            </button>
                        </td>
                    </tr>
                    <?php array_push($ft,$team->id) ?>
                    @endforeach

            </table>

            @if ($model->Teams->count() % 2 != 0)
                <a id="new" class="btn btn-md btn-default" type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Agregar Equipo</a>
            @endif
        @endif


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Seleccionar Equipo</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table striped">
                            <thead>
                                <th>Equipo</th>
                                <th></th>
                            </thead>

                            @foreach(\App\Entities\tfc\Teams::all() as $team)
                                  @if(isset($ft))
                                       @if(!in_array($team->id,$ft))
                                        <tr>
                                            <td>{{$team->name}}</td>
                                            <td>
                                                <a data-old="" data-new="{{$team->id}}" class="nuevo_equipo btn btn-xs btn-default" ><i class="fa fa-check"></i></a>
                                            </td>
                                        </tr>
                                        @endif
                                @endif
                            @endforeach
                        </table>
                    </div>
                    <input type="hidden" id="new_form" value="">
                </div>
            </div>
        </div>
    @endsection

    @section('js')
        <script>
            $('#new').on('click',function(){
                $('#new_form').val('true');
            });

            $('.cambiar').on('click',function(){

                $('.nuevo_equipo').attr('data-old', $(this).attr('data-id'));

            });

            $('.nuevo_equipo').on('click',function(){

                    var team_from   = $(this).attr('data-old');
                    var team_to     = $(this).attr('data-new');


                    if($('#new_form').val() == 'true'){
                        $(this).attr('href','fases_add_team/'+team_to);
                        $(this).click();
                    }




                    if(team_from == team_to)
                    {
                        alert('No se puede Cambiar por el mismo Equipo');
                        return;
                    }


                    $(this).attr('href','fases_change_team/'+team_from+'/'+team_to);
                    $(this).click();


            });

            $("#crear_vuelta").on('click',function(ev){

                if(confirm('¿Está seguro que desea crear la segunda vuelta?'))
                    return true;
                else
                    return false;

            });
        </script>
    @endsection
@stop