@extends('index')

    @section('content')
        <div class="panel">
        <div class="panel-heading">
            @if(isset($client))
                <h3>{!! $client->fullName !!}</h3>
            @endif
        </div>
        <div class="panel-body">
            @if(isset($client))
                {!! Form::model($model,['route' => $routePostEdit , 'files'=>'true']) !!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif
            @if(isset($clients))
                {!! Form::selectCustom('clients_id','Seleccione cliente',$clients) !!}
            @else
                {!! Form::hidden('clients_id',$client->id)!!}
            @endif
            @if(isset($client))
                {!! Form::textCustom('observaciones',$model->observaciones ,'Observacion')!!}
            @else
                {!! Form::textCustom('observaciones', 'Observacion')!!}
            @endif
                {!! Form::hidden('users_id', Auth::user()->id)!!}

            @if(isset($client))
                    <div class="form-group">
                        <label>Estado</label>
                        {!! Form::select('status',['0' => "Seleccionar"] + $status,'Estado', ['class' => "form-control"],'1') !!}
                        {{--<select class="form-control" name="status"><option value="0">Seleccionar</option><option value="1">Pendiente</option><option value="3">Finalizada</option></select>--}}

                    </div>
                {{--{!! Form::selectCustom('status', 'Estado',$status,$model->status)!!}--}}
            @else
                {!! Form::selectCustom('status', 'Estado',$status)!!}
            @endif



        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop