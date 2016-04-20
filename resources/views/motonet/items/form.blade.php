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

            {!! Form::selectCustom('brands_id','Marca',$brands) !!}

            {!! Form::checkboxsCustom('categories_id','Categorías',$brands) !!}

    {{--        {!! Form::selectCustom('provider_id','Proveedor',$providers) !!}--}}

            {!! Form::textAreaCustom('description','Descripción') !!}

            {!! Form::textCustom('cost_price', 'Precio de costo')!!}

            {!! Form::textCustom('sell_price', 'Precio de venta')!!}

            {!! Form::textCustom('discount_price', 'Precio de descuento')!!}
            {!! Form::textCustom('rent_price_15_days', 'Precio de alquiler por 15 días')!!}
            {!! Form::textCustom('rent_price_45_days', 'Precio de alquiler por 45 días')!!}

            {!! Form::dateCustom('expiration_date', 'Fecha de expiración')!!}
            {!! Form::textCustom('stock', 'Stock')!!}
            {!! Form::textCustom('stock_rental', 'Stock de alquiler')!!}
            {!! Form::textCustom('um', 'um')!!}
            {!! Form::textCustom('total_weight', 'Peso total')!!}
            {!! Form::textCustom('maximun_weight', 'Peso máximo')!!}
            {!! Form::textCustom('size', 'Tamaño')!!}
            {!! Form::textCustom('dimensions', 'Dimensiones')!!}
            {!! Form::textCustom('presentation', 'Presentación')!!}
            {!! Form::textCustom('bodega', 'Bodega')!!}
            {!! Form::textCustom('provincia', 'Provincia')!!}
            {!! Form::textCustom('observaciones', 'Observaciones')!!}

            {{--{!! Form::fileCustom('image','Foto')!!}--}}

            {!! Form::colorPicker('col','color')!!}



        </div>
        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
            
        {!! Form::close()!!}

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
