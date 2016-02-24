@extends('template/template')

@section('css')
    <style>
       #page-wrapper{
           position: none;
           margin: 0 0 0 0px;
           padding: 0 0px;
           border-left: 0px ;
           min-height: 1px;
        }
       .btn-success {
           color: #fff;
           background-color: #1ab394;
           border-color: #4cae4c;
       }
    </style>
@endsection
    @section('mainContent')

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">LogIn</h3>
                        </div>
                        <div class="panel-body">
                            {!!Form::open(['route'=>'postLogin'])!!}
                            <form role="form">
                                <fieldset>

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
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" value="Remember Me" type="checkbox">No cerrar sesion
                                        </label>
                                    </div>


                                        {!!Form::submit(trans('messages.btnAccess'),['class'=>'btn btn-md btn-block btn-success'])!!}
                                        {!!Form::close()!!}

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection

@stop