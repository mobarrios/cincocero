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

            {!! Form::selectCustom('categories_id','Categorías',$categories) !!}

    {{--        {!! Form::selectCustom('provider_id','Proveedor',$providers) !!}--}}

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
