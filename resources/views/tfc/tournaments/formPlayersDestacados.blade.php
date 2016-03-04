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

        {!! Form::selectCustom('players_id','Jugador Destacado',$players)!!}
        {!! Form::textAreaCustom('observations','Observaciones') !!}

        <hr>


        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection




@stop