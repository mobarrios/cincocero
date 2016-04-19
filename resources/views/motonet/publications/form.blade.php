@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

                {!! Form::dateCustom('publication_date', 'Fecha de Publicacíon')!!}

                {!! Form::textCustom('name', 'Titulo')!!}

                <label>Categoria Mercadolibre</label>
                <select class="form-control">

                @foreach($mlCategories as $cat => $a)
                   <option value="{{$a->id}}">{{$a->name}}</option>

                @endforeach
                </select>



                {!! Form::textCustom('price','Importe $')!!}

                {!! Form::fileCustom('image','Imagen')!!}
        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop