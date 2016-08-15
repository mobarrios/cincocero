@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::textCustom('name', 'Nombre Equipo')!!}
        {!! Form::selectCustom('status','Estado',$status) !!}
        {!! Form::selectCustom('categories_id','Categoria',$categories) !!}


        {!! Form::imageCustom('image','Escudo')!!}
        <hr>


        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop