@extends('index')

    @section('content')
        <div class="panel">
        <div class="panel-heading">
                <h3>{!! $client->fullName !!}</h3>
        </div>
        <div class="panel-body">

            @if(isset($model))
                {!! Form::model($model,['route' => $routePostEdit , 'files'=>'true']) !!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif
                {!! Form::hidden('users_id', Auth::user()->id)!!}
                {!! Form::hidden('clients_id',$client->id)!!}
                {!! Form::textCustom('observaciones','Observacion')!!}
                {!! Form::selectCustom('status', 'Estado', $status)!!}
        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop