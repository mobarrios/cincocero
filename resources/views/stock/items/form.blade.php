@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::textCustom('name', 'Articulo')!!}

        {!! Form::selectCustom('models_id', 'Modelo',$modelos)!!}

        {!! Form::dateCustom('date','Dia') !!}
<<<<<<< HEAD

        <div class="form-group" id="data_1">
            <label class="font-noraml">Simple data input format</label>
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
            </div>
        </div>
        {!! Form::imageCustom('image','Foto')!!}
=======
        {!! Form::fileCustom('image','Foto')!!}
>>>>>>> 9d38bec7542d647c021fe66d6e4d335d01386f5d

        {!! Form::colorPicker('col','color')!!}
        {!! Form::colorPicker('col1','color1')!!}

        {!! Form::hidden('brands_id',1)!!}
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

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
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
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
