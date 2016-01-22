@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        @if(\Illuminate\Support\Facades\Session::has('teams_id'))
            <label><h3>{{\App\Entities\tfc\Teams::find(Session::get('teams_id'))->name}}</h3></label>
            {!!Form::hidden('teams_id',Session::get('teams_id'))!!}

            <h5>Administrador  {!! Form::checkbox('admin')!!} </h5>

        @else
            {!! Form::selectCustom('teams_id','Equipo',$teams) !!}
        @endif


        {!! Form::textCustom('dni', 'DNI ')!!}

        {!! Form::textCustom('name', 'Nombre Juagdor')!!}
        {!! Form::textCustom('last_name', 'Apellido Juagdor')!!}
        {!! Form::textCustom('mail', 'Mail ')!!}
        {!! Form::textCustom('phone', 'Tel. ')!!}
        {!! Form::textCustom('cel', 'Cel. ')!!}

        {!! Form::selectCustom('status','Estado',$status) !!}

        <div class="motivo">
            {!! Form::textAreaCustom('motivo','Motivo Deshabilitacion') !!}
        </div>

        {!! Form::imageCustom('image','Imagen')!!}
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@section('js')
    <script>

        if($("select[name='status']").val() == 2)
            $('.motivo').css('display','block');
        else
            $('.motivo').css('display','none');


        $("select[name='status']").on('change',function(){

            if($(this).val() == 2)
                $('.motivo').css('display','block');
            else
                $('.motivo').css('display','none');

        });
    </script>
@endsection
@stop