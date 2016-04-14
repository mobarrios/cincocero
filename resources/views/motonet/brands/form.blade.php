@extends('index')

    @section('content')
        <div class="panel">
            <div class="panel-body">
                @if(isset($model))
                    {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
                @else
                    {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
                @endif

                {!! Form::textCustom('name', 'Marca')!!}
                {!! Form::imageCustom('image','Imagen')!!}
            </div>
            <div class="panel-footer">
                {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
                {!! Form::close()!!}
        </div>

    @endsection

@stop