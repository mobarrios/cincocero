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

                @if(isset($prov))
                    {!! Form::selectMultipleCustom('providers_id[]','Proveedores',$providers,$prov) !!}
                @else
                    {!! Form::selectMultipleCustom('providers_id[]','Proveedores',$providers) !!}
                @endif

                {!! Form::selectCustom('types_id','Tipo',$types) !!}

                {!! Form::selectCustom('engines_id','Motor',$engines) !!}

                {!! Form::selectCustom('displacements_id','Cilindrada',$displacements) !!}

                {!! Form::selectCustom('transmission','Transmisión',$transmission) !!}

                {!! Form::textCustom('hp', 'HP')!!}

                {!! Form::selectCustom('start', 'Arranque',$start)!!}

                {!! Form::selectCustom('brake', 'Freno',$brake)!!}

                {!! Form::textCustom('tanque_de_combustible', 'Tanque de combustible')!!}

                {!! Form::textCustom('peso', 'Peso')!!}

                {!! Form::textCustom('adicional', 'Adicional')!!}

                <hr>

                <h4 class="col-xs-12">Compra</h4>
                <div class="col-xs-4">
                    <label>Precio de Compra</label>
                    @if(isset($model) && !is_null($model->purchasePrice))
                        {!! Form::text('purchase_price',  $model->purchasePrice->price  ,['class'=>'form-control'])!!}
                    @else
                        {!! Form::text('purchase_price', null, ['class'=>'form-control'])!!}
                    @endif
                </div>
                <div class="col-xs-4">
                <label>Precio de Flete</label>
                    @if(isset($model) && !is_null($model->purchasePrice))
                         {!! Form::text('flete_price',$model->purchasePrice->flete_price  ,['class'=>'form-control'])!!}
                    @else
                        {!! Form::text('flete_price',null, ['class'=>'form-control'])!!}
                    @endif
                </div>


                <h4 class="col-xs-12">Venta</h4>

                <div class="col-xs-4">
                    <label>Precio de Venta</label>
                    @if(isset($model) && !is_null($model->salePrice))
                        {!! Form::text('sale_price', $model->salePrice->price,['class'=>'form-control'])!!}
                    @else
                        {!! Form::text('sale_price',null, ['class'=>'form-control'])!!}
                     @endif
                </div>
                <div class="col-xs-4">
                    <label>Precio de Patentamiento</label>
                    @if(isset($model) && !is_null($model->salePrice))
                         {!! Form::text('patentamiento_price',$model->salePrice->patentamiento_price, ['class'=>'form-control'])!!}
                    @else
                         {!! Form::text('patentamiento_price',null, ['class'=>'form-control'])!!}
                    @endif
                </div>
                <div class="col-xs-4">
                    <label>Precio del Pack Service</label>
                    @if(isset($model) && !is_null($model->salePrice))
                        {!! Form::text('pack_price', $model->salePrice->pack_price,['class'=>'form-control'])!!}
                    @else
                         {!! Form::text('pack_price',null, ['class'=>'form-control'])!!}
                    @endif
                </div>

                <div class="col-xs-4">
                    <label>Dto Maximo %</label>
                    @if(isset($model) && !is_null($model->salePrice))
                        {!! Form::text('max_discount', $model->salePrice->max_discount,['class'=>'form-control'])!!}
                    @else
                        {!! Form::text('max_discount',null, ['class'=>'form-control'])!!}
                    @endif
                </div>



        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop