@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Articulo')!!}

        {!! Form::selectCustom('brands_id', 'Marca',$brands)!!}

<<<<<<< HEAD
<<<<<<< HEAD
        {!! Form::label('Categoria')!!}
        {!! Form::select('')!!}

        {!! Form::label('Marca')!!}
        {!! Form::select('')!!}
        {!! Form::selectCategories()!!}
=======
        {!! Form::selectEntity('name','Marcas',$brands)!!}
>>>>>>> master
=======
        {!! Form::dateCustom('date','Dia') !!}
        {!! Form::imageCustom('image','Foto')!!}
>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b

        {!! Form::colorPicker('col','color')!!}
        {!! Form::colorPicker('col1','color1')!!}

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop