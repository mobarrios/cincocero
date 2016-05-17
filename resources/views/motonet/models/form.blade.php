@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

            {!! Form::textCustom('name', 'Modelo')!!}

            {!! Form::fileCustom('image','Foto')!!}

            {!! Form::selectCustom('brands_id','Marca',$brands) !!}

                @if(isset($cat))
                    {!! Form::selectMultipleCustom('categories_id[]','Categorías',$categories,$cat) !!}
                @else
                    {!! Form::selectMultipleCustom('categories_id[]','Categorías',$categories) !!}
                @endif

        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop