@extends('index')

@section('content')
    <div class="col-xs-12">
        <a href="{{route($routeNew)}}"  class=" btn btn-xs btn-info">Nueva Temporada</a>
    </div>

    <hr>

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
                                <h4 class="text-center">{{$cat->name}}</h4>

                                @foreach(\App\Entities\tfc\Series::all() as $serie)


                                    @foreach(\App\Entities\tfc\Tournaments::where('categories_id',$cat->id)->where('series_id', $serie->id)->get() as $data )

                                        <table class="table table-condensed table-bordered">
                                            <th> {{$serie->name}}</th>

                                            <tr>
                                                <td><a href=""> {{$data->name}}</a></td>

                                            </tr>

                                        </table>
                                    @endforeach
                                @endforeach


                            </div>
                            <div class="panel-footer">
                                <a href="{{route('tournamentsGetNew',$cat->id)}}" class="btn btn-xs btn-block">Nuevo Torneo</a>
                            </div>
                        </div>

                @endforeach






            </div>

        </div>
        @endforeach

    </div>
@endsection

@stop

