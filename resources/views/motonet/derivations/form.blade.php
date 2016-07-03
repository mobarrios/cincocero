@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

                {!! Form::hidden('clients_id',$client->id)!!}
                {!! Form::textCustom('observaciones', 'Observacion')!!}
                {!! Form::hidden('users_id', Auth::user()->id)!!}

                {!! Form::selectCustom('status', 'Estado',$status)!!}




        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop