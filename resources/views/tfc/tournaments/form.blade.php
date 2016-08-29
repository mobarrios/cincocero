@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}

            {!! Form::hidden('categories_id',$categories_id)!!}
            {!! Form::hidden('seasons_id',$seasons_id)!!}

        @endif



        {!! Form::textCustom('name', 'Nombre Torneo')!!}

        <div class="row">
            <div class="col-xs-6">
                {!! Form::dateCustom('from', 'Fecha Inicio ')!!}
            </div>
            <div class="col-xs-6">
                {!! Form::dateCustom('to', 'Fecha Final')!!}
            </div>
        </div>





        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop