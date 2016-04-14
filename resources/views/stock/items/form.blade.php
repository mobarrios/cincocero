@extends('index')

    @section('content')
        <div class="panel">

            <div class="panel-body">

                @if(isset($model))
                    {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
                @else
                    {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
                @endif


                {!! Form::textCustom('name', 'Articulo')!!}

                {!! Form::selectCustom('models_id', 'Modelo',$modelos)!!}

                {!! Form::dateCustom('date','Dia') !!}

                {!! Form::fileCustom('image','Foto')!!}

                {!! Form::colorPicker('col','color')!!}
                {!! Form::colorPicker('col1','color1')!!}

                {!! Form::hidden('brands_id',1)!!}
            </div>

            <div class="panel-footer">

                {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
                {!! Form::close()!!}
            </div>
    @endsection

@section('js')
    <script>
        $('.datepicker').datepicker({
            changeYear: true
        });
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'S�bado'],
            dayNamesShort: ['Dom','Lun','Mar','Mi�','Juv','Vie','S�b'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S�'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
    </script>
    @endsection

@stop
