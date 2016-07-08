@extends('index')

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h3>{!! $sectionName !!}</h3>
        </div>
        <div class="panel-body">

            @if(isset($model))
                {!! Form::model($model,['route' => $routePostEdit , 'files'=>'true']) !!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif
            {!! Form::hidden('users_id', Auth::user()->id)!!}

            {!! Form::hidden('derivations_id',$derivation->id)!!}

            {!! Form::textAreaCustom('message','Mensaje')!!}
        </div>

        <div class="panel-footer">

            {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
            {!! Form::close()!!}

        </div>
    </div>

@endsection

@stop