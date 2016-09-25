@extends('index')

    @section('content')
        <div class="panel">

            <div class="panel-body">

                @if(isset($model))
                    {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
                @else
                    {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
                @endif


                {!! Form::textCustom('name', 'Articulo')!!}

                {!! Form::selectCustom('models_id', 'Modelo', $modelos)!!}

                {!! Form::dateCustom('date_from','Desde') !!}

                    {!! Form::dateCustom('date_to','hasta') !!}


                    {!! Form::fileCustom('image','Foto')!!}

                {!! Form::colorPicker('color','color')!!}

            </div>

            <div class="panel-footer">

                {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
                {!! Form::close()!!}
            </div>
    @endsection


@stop
