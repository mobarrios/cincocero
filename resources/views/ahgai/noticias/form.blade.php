@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::dateCustom('fecha_publicacion','Fecha Publicacion')!!}
        {!! Form::textCustom('encabezado', 'Encabezado')!!}

        {!! Form::textAreaCustom('descripcion', 'Descripción')!!}




        {!! Form::imageCustom('image','Fotos') !!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop