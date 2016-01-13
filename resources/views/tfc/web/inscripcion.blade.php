@extends('tfc/web/template')
    @section('content')
        <div class="center-col">

            <center>
                <div class="breadcrumb clearfix">inscripcion online<span class="bottom-line"></span>
                </div></center>
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div id="contact-box">
                        <h5 class="contact-title clearfix">&nbsp;</h5>
                        <div class="col-md-8 col-md-offset-2">


                            {!! Form::open(['class'=>'form contact-form']) !!}

                            <div class="mb-20 mb-md-10">
                                {!! Form::text('dni',null ,['class'=>'input-md form-control','placeholder'=>'DNI']) !!}
                            </div>
                            <div class="mb-20 mb-md-10">
                                {!! Form::text('last_name',null ,['class'=>'input-md form-control','placeholder'=>'Apellido']) !!}
                            </div>
                            <div class="mb-20 mb-md-10">
                                {!! Form::text('name',null ,['class'=>'input-md form-control','placeholder'=>'Nombre']) !!}
                            </div>
                            <div class="mb-20 mb-md-10">
                                {!! Form::text('email',null ,['class'=>'input-md form-control','placeholder'=>'E-Mail']) !!}
                            </div>
                            <hr>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::select('teams_id',['0'=>'Seleccionar Equipo']+ $teams ,['class'=>'input-md form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" pattern=".{5,100}" required>
                                </div>
                                <div class="pt-10">
                                    <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Enviar Solicitud</button>
                                </div>


                            {!! Form::close() !!}



                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div id="response"></div>
                    </div></div>
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>
        <!-- center-col -->
    @endsection()