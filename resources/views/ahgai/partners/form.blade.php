@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Nombre Asociado')!!}
        {!! Form::textCustom('last_name', 'Apellido Asociado')!!}



        {!! Form::textCustom('mail', 'Mail')!!}

        {!! Form::textCustom('phone', 'Tel.')!!}

        {!! Form::selectCustom('establecimientos_id','Establecimiento Relacionado', $establecimientos) !!}





        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop