@extends('index')

@section('content')




    <div class="panel-group" id="accordion">



    @foreach($models as $season)
        <div class="panel panel-default">
            <div class="panel-heading">

                <h4 class="panel-title">
                    <a class="" aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#{{$season->id}}">
                       {{$season->name}}
                    </a>
                    <small class="text-success pull-right"> </small>

                </h4>

            </div>

            <div style="" aria-expanded="true" id="{{$season->id}}" class="panel-collapse collapse in">
                <div class="panel-body">

                @foreach(\App\Entities\soffem\Categories::all() as $cat)

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4 class="text-center">Categoria : {{$cat->name}}</h4>

                                    @foreach(\App\Entities\soffem\Tournaments::where('seasons_id',$season->id)->where('categories_id',$cat->id)->get() as $torneo )

                                        <table class="table table-condensed table-bordered">
                                            <th colspan="3"> {{$torneo->name}}
                                                <span class="pull-right"> <a href="{{route('tournamentsGetEdit',$torneo->id)}}" class="btn btn-xs btn-default"><span class="fa fa-pencil"></span></a></span>
                                            </th>

                                                @foreach($torneo->Fases as $fases)
                                                <tr>
                                                    <td class="col-xs-9">
                                                      {{$fases->name}}
                                                    </td>

                                                    <td class="col-xs-2">
                                                        <a href="{{route('fasesFixture',$fases->id)}}" class="btn btn-xs btn-success">Fixture</a>
                                                        @if(!$fases->play_off)
                                                            <a href="{{route('fasesTabla',$fases->id)}}"class="btn btn-xs btn-success">Tabla</a>
                                                        @endif
                                                    </td>

                                                    <td class="col-xs-2">
                                                        <a href="{{route('fasesGetEdit',$fases->id)}}" class="btn btn-xs btn-default"><span class="fa fa-pencil"></span></a>
                                                        <a href="{{route('fasesGetDel',$fases->id)}}"class="delete btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                </tr>


                                                @endforeach

                                            <tfoot>
                                            <td colspan="3">
                                                <a href="{{route('fasesGetNew',$torneo->id)}}" class="btn btn-xs btn-default">Nueva Fase</a>
                                            </td>
                                            </tfoot>

                                        </table>
                                    @endforeach



                            </div>
                            <div class="panel-footer">
                                <a href="{{route('tournamentsGetNew',[$season->id, $cat->id])}}"    class="btn btn-xs btn-default">Nuevo Torneo</a>
                                <a href="{{route('tournamentsDestacadosPlayersGetNew',[$season->id, $cat->id])}}"     class="btn btn-xs btn-default">Jugador Destacado</a>
                                <a href="{{route('tournamentsDestacadosTeamsGetNew',[$season->id, $cat->id])}}"     class="btn btn-xs btn-default">Equipo Destacado</a>

                            </div>
                        </div>

                @endforeach

        </div>

        </div>

        </div>
        @endforeach

    </div>
            <hr>
            <a href="{{route($routeNew)}}"  class=" btn btn-block btn-info">Nueva Temporada</a>

@endsection

@stop

