@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::dateCustom('from', 'Fecha Inicio ')!!}
        {!! Form::dateCustom('to', 'Fecha Final')!!}

        {!! Form::textCustom('name', 'Nombre Torneo')!!}


        {!! Form::hidden('categories_id',$categories_id)!!}
        {!! Form::hidden('seasons_id',$seasons_id)!!}



        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop