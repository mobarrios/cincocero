@extends('index')

@section('content')

    {!! Form::open(['route'=>['post_new_fases_week',$fases->id], 'files' =>'true'] ) !!}

    {!! Form::hidden('fases_id',$fases->id) !!}
    {!! Form::textCustom('name', 'Fecha')!!}

    <hr>

    {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
    {!! Form::close()!!}

@endsection

@stop