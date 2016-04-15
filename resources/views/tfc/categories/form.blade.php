@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::textCustom('name', 'Nombre Categoría')!!}

        {!! Form::colorPicker('color_top','Color 1') !!}
        {!! Form::colorPicker('color_bottom','Color 2') !!}


        {!! Form::imageCustom('image','Logo')!!}
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop