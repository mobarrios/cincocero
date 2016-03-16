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

        <div class="form-group" id="data_1">
            <label class="font-noraml">Simple data input format</label>
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
            </div>
        </div>
        {!! Form::imageCustom('image','Foto')!!}

        {!! Form::colorPicker('col','color')!!}
        {!! Form::colorPicker('col1','color1')!!}

        {!! Form::hidden('brands_id',1)!!}
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop