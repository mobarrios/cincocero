@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::textCustom('code', 'Codigo')!!}

        {!! Form::textCustom('name', 'Articulo')!!}

        {!! Form::textCustom('description', 'Descripcion')!!}

        {!! Form::selectCustom('name','Marcas',$brands)!!}

        {!! Form::label('Imagen')!!}
        {!! Form::file('image')!!}

        {!! Form::imageCustom() !!}

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop