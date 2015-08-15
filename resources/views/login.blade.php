@extends('template/template')

    @section('mainContent')

        @include('messages')

        <div class="col-xs-6 col-xs-offset-2">

        <div class="panel panel-default">
            <div class="panel-heading">
                Login
            </div>
            <div class="panel-body">
                {!!Form::open(['route'=>'postLogin'])!!}
                {!!Form::label('E-mail') !!}
                {!!Form::text('email',null,['class'=>'form-control'])!!}
                {!!Form::label('Password') !!}
                {!!Form::password('password',['class'=>'form-control'])!!}

            </div>
            <div class="panel-footer">
                {!!Form::submit(trans('messages.btnAccess'),['class'=>'btn btn-xs btn-default'])!!}
                {!!Form::close()!!}
            </div>
        </div>

        </div>



    @endsection

@stop