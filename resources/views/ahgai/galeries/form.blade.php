@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::textCustom('name', 'Nombre Foto')!!}


        {!! Form::selectCustom('brands_id', 'Marca',$brands)!!}


        {!! Form::imageCustom('image','Foto')!!}

<<<<<<< HEAD:resources/views/ahgai/galeries/form.blade.php
=======
        {!! Form::colorPicker('col','color')!!}
        {!! Form::colorPicker('col1','color1')!!}

>>>>>>> 08c145218165bbc79eab454d5c9ac98f61b92331:resources/views/stock/items/form.blade.php
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop