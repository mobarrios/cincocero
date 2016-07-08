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
<<<<<<< HEAD
                {!! Form::hidden('clients_id',$client->id)!!}
                {!! Form::textCustom('observaciones','Observacion')!!}
                {!! Form::selectCustom('status', 'Estado', $status)!!}
=======

            @if(isset($client))
                {!! Form::selectCustom('status', 'Estado',$status)!!}
            @else
                {!! Form::selectCustom('status', 'Estado',$status)!!}
            @endif



>>>>>>> ed2a076ac20435267c50312e671a1581eb3674d9
        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop