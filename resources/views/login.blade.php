@extends('template/template')

    @section('mainContent')

        @include('messages')

        {!!Form::open(['route'=>'postLogin'])!!}
        {!!Form::text('email')!!}
        {!!Form::password('password')!!}
        {!!Form::submit('submit')!!}
        {!!Form::close()!!}

    @endsection

@stop