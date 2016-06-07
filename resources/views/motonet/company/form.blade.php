@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif


            {!! Form::fileCustom('image','Logo')!!}
            {!! Form::textCustom('name', 'Empresa')!!}
            {!! Form::textCustom('address', 'Dirección')!!}
            {!! Form::textCustom('phone', 'Tel.')!!}
            {!! Form::colorPicker('color', 'Color')!!}








        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop