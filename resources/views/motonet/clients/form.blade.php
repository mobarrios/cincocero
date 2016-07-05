@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

                {!! Form::textCustom('last_name', 'Apellido')!!}
                {!! Form::textCustom('name', 'Nombre')!!}
                {!! Form::textCustom('dni', 'DNI')!!}

                {!! Form::textCustom('phone', 'Teléfono')!!}
                {!! Form::textCustom('cell_phone', 'Celular')!!}
                {!! Form::textCustom('address', 'Dirección')!!}


                {!! Form::textCustom('email', 'E-Mail')!!}

                <div class="col-xs-12 checkbox c-checkbox pull-left mt0">
                    <label>
                        {!! Form::checkbox('derivation')!!}
                        <span class="fa fa-check"></span>Guardar y derivar.
                    </label>
                </div>


        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop