
    @if(isset($model))
        {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
    @else
        {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
    @endif


    {!! Form::textCustom('type', 'Tipo')!!}

    {!! Form::textCustom('quota', 'Cuota')!!}

    {!! Form::textCustom('quota_from', 'Cuota Desde')!!}
    {!! Form::textCustom('quota_to', 'Cuota Hasta')!!}

    {!! Form::textCustom('coef', 'Coeficiente')!!}






    {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
    {!! Form::close()!!}
