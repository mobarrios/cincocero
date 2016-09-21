
<div class="panel">

    <div class="panel-body">

        {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}


        <label>Modelo</label>
        <div class="form-group">
            <select name='models_id' style="width: 100%;" class="select_model form-control">
                @foreach($brands as $br)
                    <optgroup label="{{$br->name}}">
                        @foreach($br->Models as $m)
                            <option data-price="{{$m->salePrice->price or ''}}" data-discount="{{$m->salePrice->max_discount or ''}}" data-patentamiento="{{$m->salePrice->patentamiento_price or ''}}" value="{{$m->id}}" @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>

        <hr>
        <div class="row">
            <div class="col-xs-6">
                <label>Precio de Lista</label>
                {!! Form::text('list_price',null, ['id'=>'list_price','class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6">
                <label>Precio de Contado</label>
                {!! Form::text('count_price',null, ['id'=>'costo_price','class'=>'form-control']) !!}
            </div>
        </div>


        <div class="row">
            <div class="col-xs-4">
                {!! Form::checkbox('alarma') !!}
                <label>Alarma</label>
                {!! Form::text('alarm_price',null,['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-4">
                {!! Form::checkbox('patentamiento') !!}
                <label>Patentamiento</label>
                {!! Form::text('patentamiento_price',null,['id'=>'patentamiento_price', 'class'=>'form-control']) !!}

            </div>
            <div class="col-xs-4">
                {!! Form::checkbox('seguro') !!}
                <label>Seguro</label>
                {!! Form::text('alarm_price',null,['class'=>'form-control']) !!}

            </div>
        </div>

        <hr>
                <label>Medios de Pago</label>

                {!! Form::textCustom('entrega','Entrega Inicial') !!}
        
                <a href="#" class="btn btn-md btn-default">Calcular</a>
        <hr>
        {!! Form::textCustom('observations','Observaciones') !!}




    </div>

    <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}
        <div class="pull-right">
             Atendido por : <strong>{{\Illuminate\Support\Facades\Auth::user()->fullName}}</strong>
        </div>
    </div>

</div>

@section('js')
    <script>
            $('.select_model').change(function(){
                var pat     = $('option:selected',this).attr('data-patentamiento');
                var price   = $('option:selected',this).attr('data-price');
                var discount= $('option:selected',this).attr('data-discount');

                $('#costo_price').val(price - ((price*discount)/100) );
                $('#list_price').val(price);
                $('#patentamiento_price').val(pat);
            });
    </script>
@endsection