@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::textCustom('legajo', 'Legajo Empleado')!!}
        {!! Form::textCustom('dni', 'DNI Empleado')!!}
        {!! Form::textCustom('apellido', 'Apellido Empleado')!!}
        {!! Form::textCustom('nombre', 'Nombre Empleado')!!}
        {!! Form::textCustom('telefono', 'Tel. Empleado')!!}

        {!! Form::selectCustom('funciones_id','Función del Empleado',$empleados_funciones)!!}



        {!! Form::imageCustom('image','Foto')!!}


        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop