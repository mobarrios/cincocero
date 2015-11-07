@extends('template/template')

    @section('mainContent')

        <div class="col-xs-6 col-md-offset-3">

            <h3 class="text-center"><strong>Login</strong></h3>

            <div class="panel panel-default">


                <div class="panel-body">
                    {!!Form::open(['route'=>'postLogin'])!!}

                    <div class="form-group">
                        {!!Form::label('E-mail') !!}
                         <div class="input-group">
                            {!!Form::text('email',null,['class'=>'form-control'])!!}
                            <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                        </div>
                    </div>

                    <div class="form-group">
                    {!!Form::label('Password') !!}
                        <div class="input-group">
                            {!!Form::password('password',['class'=>'form-control'])!!}
                            <span class="input-group-addon"><i class="fa fa-lock"></i> </span>
                        </div>

                    </div>


                </div>
                <div class=" panel-footer">
                    {!!Form::submit(trans('messages.btnAccess'),['class'=>'btn btn-md btn-block btn-primary'])!!}
                    {!!Form::close()!!}
                </div>
            </div>

        </div>











    @endsection

@stop