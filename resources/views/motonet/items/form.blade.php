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
            {{-- Form::textCustom('detail', 'Detalle') --}}


        <label>Modelo</label>
        <select name='models_id' class="form-control">
            <option value="0">Seleccionar</option>
            @foreach($brands as $br)
                <optgroup label="{{$br->name}}">
                    @foreach($br->Models as $m)
                            <option value="{{$m->id}}">{{$m->name}}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>

            {!! Form::selectCustom('branches_id','Sucursal',$branches) !!}
            {!! Form::textCustom('n_motor', 'Nro. Motor')!!}

            {!! Form::textCustom('n_chasis', 'Nro. Chasis')!!}



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
