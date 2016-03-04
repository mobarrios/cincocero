@extends('index')

@section('content')

    @if(isset($model))
        {!! Form::model($model, ['route'=>['tournamentsDestacadosTeamsPostNew',$model->id], 'files' =>'true'] )!!}
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$model->Teams->Images->first()->image or 'aa'}}">
                    <h3> {{$model->Teams->fullName}}</h3>
                </div>
            </div>
        </div>
    @else
        {!! Form::open(['route' => 'tournamentsDestacadosTeamsPostNew' , 'files'=>'true']) !!}
    @endif

    {!! Form::selectCustom('teams_id','Equipo Destacado',$teams)!!}
    {!! Form::textAreaCustom('observations','Observaciones') !!}

    <hr>


    {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
    {!! Form::close()!!}

@endsection




@stop