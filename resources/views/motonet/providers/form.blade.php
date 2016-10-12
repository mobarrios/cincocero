@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

            {!! Form::fileCustom('image','Foto')!!}

            {!! Form::textCustom('name', 'Nombre ')!!}
            {!! Form::textCustom('razon_social', 'Razón Social ')!!}
            {!! Form::textCustom('cuit', 'CUIT ')!!}
            {!! Form::textCustom('phone', 'Tel. ')!!}
            {!! Form::textCustom('mail', 'Mail ')!!}
            {!! Form::textCustom('contact_name', 'Nombre Contacto ')!!}
            {!! Form::textCustom('address', 'Dirección ')!!}
            {!! Form::selectCustom('iva_condition_id', 'Condicion ante el IVA',$ivaCondition)!!}

        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection
@stop