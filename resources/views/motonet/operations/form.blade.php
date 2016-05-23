@extends('index')

    @section('content')
        <div class="panel">

            <div class="panel-heading">
                    Operacion Nro.: <strong>{{$model->id}}</strong>
            </div>
        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif


                   Fecha : {{$model->created_at}}
                <br>
                    Cliente: {{$model->Clients->last_name}} {{$model->Clients->last_name}}
                <br>
                    Medio de Pago: {{$model->MedioPago}}
                <br>
                    Monto Abonado: $ {{$model->amount}}
                <br>
                    Monto Abonado: $ {{$model->amount}}
                <hr>



        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop