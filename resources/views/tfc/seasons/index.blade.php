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
                    <small class="text-success pull-right"> {{$season->from}}   {{$season->to}}</small>

                </h4>

            </div>

            <div style="" aria-expanded="true" id="{{$season->id}}" class="panel-collapse collapse in">
                <div class="panel-body">

                @foreach(\App\Entities\tfc\Categories::all() as $cat)

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4 class="text-center">Categoria : {{$cat->name}}</h4>

                                    @foreach($cat->Tournaments as $torneo )

                                        <table class="table table-condensed table-bordered">
                                            <th colspan="2"> {{$torneo->name}}</th>

                                                @foreach($torneo->Fases as $fases)
                                                <tr>
                                                <td>
                                                  {{$fases->name}}
                                                </td>

                                                    <td>
                                                        <a href="{{route('fasesFixture',$fases->id)}}" class="btn btn-xs btn-success">Fixture</a>
                                                        <a href="{{route('fasesTabla',$fases->id)}}"class="btn btn-xs btn-success">Tabla</a>

                                                         <a href="{{route('fasesFixture',$fases->id)}}"class="btn btn-xs btn-success">Sanciones</a>
                                                         <a href="{{route('fasesFixture',$fases->id)}}"class="btn btn-xs btn-success">Goleadores</a>
                                                        <a href="{{route('fasesFixture',$fases->id)}}"class="btn btn-xs btn-success">FairPlay</a></td>



                                                </tr>

                                                @endforeach

                                            <tfoot>
                                            <td colspan="2">
                                                <a href="{{route('fasesGetNew',$torneo->id)}}" class="btn btn-xs btn-block">Nueva Fase</a>
                                            </td>
                                            </tfoot>

                                        </table>
                                    @endforeach



                            </div>
                            <div class="panel-footer">
                                <a href="{{route('tournamentsGetNew',[$season->id, $cat->id])}}" class="btn btn-xs btn-block">Nuevo Torneo</a>
                            </div>
                        </div>

                @endforeach






            </div>

        </div>
        @endforeach

    </div>
            <hr>
            <a href="{{route($routeNew)}}"  class=" btn btn-block btn-info">Nueva Temporada</a>

@endsection

@stop

