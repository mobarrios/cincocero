@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Articulo')!!}

        {!! Form::selectCustom('brands_id', 'Marca',$brands)!!}

        {!! Form::dateCustom('date','Dia') !!}
        {!! Form::imageCustom('image','Foto')!!}

        {!! Form::colorPicker('col','color')!!}
        {!! Form::colorPicker('col1','color1')!!}

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop