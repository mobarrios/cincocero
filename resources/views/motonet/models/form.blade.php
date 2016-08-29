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

                <hr>

                <h4>Compra</h4>

                <label>Precio de Compra</label>
                @if(isset($model) && !is_null($model->purchasePrice))
                    {!! Form::text('purchase_price',  $model->purchasePrice->price  ,['class'=>'form-control'])!!}
                @else
                    {!! Form::text('purchase_price', null, ['class'=>'form-control'])!!}
                @endif

                <label>Precio de Flete</label>
                @if(isset($model) && !is_null($model->purchasePrice)))
                     {!! Form::text('flete_price',$model->purchasePrice->flete_price  ,['class'=>'form-control'])!!}
                @else
                    {!! Form::text('flete_price',null, ['class'=>'form-control'])!!}
                @endif
                <hr>
                <h4>Venta</h4>
                {!! Form::textCustom('sale_name', 'Precio de Venta')!!}
                {!! Form::textCustom('patentamiento_price', 'Precio de Patentamiento')!!}
                {!! Form::textCustom('pack_price', 'Precio de Pack')!!}





        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop