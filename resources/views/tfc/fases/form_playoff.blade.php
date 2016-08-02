@extends('index')

@section('css')
    <link href="assets/select2/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

    <h1>Play Off</h1>

     {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
     {!! Form::hidden('tournaments_id', $tournaments_id) !!}

     {!! Form::selectCustom('fase_playoff', 'Nombre Fase')!!}


    <div class="row">
        <div class="col-xs-4">
            <h4>Local</h4>

            <select id="home"class="select2_demo_1 " >
                <option value="0">Libre</option>
                @foreach(\App\Entities\tfc\Teams::orderBy('name','ASC')->get() as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-xs-4">
            <h4>Visitante</h4>

            <select id="away" class="select2_demo_1 ">
                <option value="0">Libre</option>
                @foreach(\App\Entities\tfc\Teams::orderBy('name','ASC')->get() as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
            </select>
        </div>
        <a id="add_cruce" class="btn ">crear cruce</a>
    </div>
    <br>

    <div id="print_cruce">
    </div>


    {!! Form::checkbox('ida_vuelta') !!}
    {!! Form::label('Partidos Ida y Vuelta') !!}

    <br>


    {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
    {!! Form::close()!!}


@endsection

@section('js')
    <script>

        var cruces = 0;

        $('.select2_demo_1').select2();

        $('#add_cruce').on('click',function () {

            cruces++;

            var home = $('#home option:selected').text();
            var away = $('#away option:selected').text();

            var home_id = $('#home').val();
            var away_id = $('#away').val();

            $('#print_cruce').append(crear(home, away));
            $('#print_cruce').append(crear_hidden(cruces, home_id, away_id));

        });

        function crear(home, away){

            var data = ' <div class="col-xs-12"> <div class=" panel panel-default col-xs-2 text-center"> <span>'+home+'</span> </div> <div class="col-xs-1 text-center">vs </div> <div class=" panel panel-default col-xs-2 text-center"> <span>'+away+' </span> </div> </div> ';
            return data;
        }

        function crear_hidden(cruces, home_id, away_id){

            var data = "<input name='cruces_home["+cruces+"]' type='hidden'value='"+home_id+"'><input name='cruces_away["+cruces+"]' type='hidden' value='"+away_id+"'>";
            return data;
        }

    </script>
@endsection
@stop