@extends('index')

    @section('content')
        <div class="panel">
        <div class="panel-heading">
            @if(isset($client))
                <h3>{!! $client->fullName !!}</h3>
            @endif
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}

            @if(isset($clients))
                {!! Form::selectCustom('clients_id','Seleccione cliente',$clients) !!}
            @else
                {!! Form::hidden('clients_id',$client->id)!!}
            @endif
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