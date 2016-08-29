
<div class="panel">

    <div class="panel-body">

        {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}


        <label>Modelo</label>
        <div class="form-group">
            <select name='models_id' style="width: 100%;" class="form-control">
                @foreach($brands as $br)
                    <optgroup label="{{$br->name}}">
                        @foreach($br->Models as $m)
                            <option value="{{$m->id}}" @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}} -  ${{$m->purchasePrice->price or 'Consultar'}}</option>
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>

        <div class="row">
            <div class="col-xs-6">
                {!! Form::textCustom('list_price','Precio de Lista') !!}
            </div>
            <div class="col-xs-6">
                {!! Form::textCustom('count_price','Precio de Contado') !!}
            </div>
        </div>


        <div class="row">
            <div class="col-xs-4">
                {!! Form::checkbox('alarm') !!}
                <label>Alarma</label>
                {!! Form::text('alarm_price',null,['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-4">
                {!! Form::checkbox('alarm') !!}
                <label>Patentamiento</label>
                {!! Form::text('alarm_price',null,['class'=>'form-control']) !!}

            </div>
            <div class="col-xs-4">
                {!! Form::checkbox('alarm') !!}
                <label>Seguro</label>
                {!! Form::text('alarm_price',null,['class'=>'form-control']) !!}

            </div>

        </div>

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