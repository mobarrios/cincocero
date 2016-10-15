@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
                {!! Form::selectCustom('status','Estado',$status) !!}

            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

                {!! Form::textAreaCustom('description', 'Descripción')!!}
                {!! Form::hidden('users_id',\Illuminate\Support\Facades\Auth::user()->id ) !!}
        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>



        </div>

    @endsection

@stop