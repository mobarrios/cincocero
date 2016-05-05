@extends('index')
    @section('content')
    <div class="panel">
        <div class="panel-body">

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

            {!! Form::textCustom('code', 'Codigo')!!}
            {!! Form::textCustom('name', 'Articulo')!!}
            {{-- Form::textCustom('detail', 'Detalle') --}}

        @if(isset($cat))
            {!! Form::selectMultipleCustom('categories_id[]','Categorías',$categories,$cat) !!}
        @else
            {!! Form::selectMultipleCustom('categories_id[]','Categorías',$categories) !!}
        @endif

        <label>Modelo</label>
        <select name='models_id' class="form-control">
            @foreach($brands as $br)
                <optgroup label="{{$br->name}}">
                    @foreach($br->Models as $m)
                            <option value="{{$m->id}}">{{$m->name}}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>


            {!! Form::textAreaCustom('description','Descripción') !!}

            {!! Form::textCustom('cost_price', 'Precio de costo')!!}

            {!! Form::textCustom('sell_price', 'Precio de venta')!!}

            {!! Form::textCustom('observaciones', 'Observaciones')!!}

            {!! Form::fileCustom('image','Foto')!!}

            {!! Form::colorPicker('col','color')!!}



        </div>
        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
            
        {!! Form::close()!!}

         </div>
    </div>
    @endsection

    @section('js')
        <script>
            $("[name='brands_id']").on('change',function(){
                $.ajax();

                $(this).val();
            });
        </script>
    @endsection

@stop
