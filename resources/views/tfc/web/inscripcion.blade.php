@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
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


                            {!! Form::open(['route'=>'postRegistration','class'=>'form contact-form','files' => true]) !!}

                            <div class="mb-20 mb-md-10">
                                <ul>
                               @if($errors->count()!= 0)
                                  @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                  @endforeach
                               @endif
                                </ul>
                            </div>


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
                                    {!! Form::text('mail',null ,['class'=>'input-md form-control','placeholder'=>'E-Mail']) !!}
                                </div>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::text('phone',null ,['class'=>'input-md form-control','placeholder'=>'Teléfono fijo']) !!}
                                </div>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::text('cel',null ,['class'=>'input-md form-control','placeholder'=>'Celular']) !!}
                                </div>
                                <div class="mb-20 mb-md-10 form-group">
                                    <label for="image">FOTO DEL JUGADOR</label>
                                    {!! Form::file('image',['class'=>'input-md form-control','required']) !!}
                                </div>
                                <div class="mb-20 mb-md-10 form-group selectEquipos">
                                    {!! Form::select('teams_id',['0'=>'Seleccionar Equipo'] + $teams ,['class'=>'input-md form-control','required'=>'required']) !!}
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password"  required>
                                </div>
                            <hr>
                                <div class="mb-20 mb-md-10 form-group" style="text-align:center;">
                                    <label>Acepta <a href="" class="terms" data-toggle="modal" data-target="#myModal">TÉRMINOS Y CONDICIONES</a> del sitio
                                        {!! Form::checkbox('terms','terms',['class'=>'input-md form-control','required'=>'required']) !!}
                                    </label>
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


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel" style="color:#376906;">TÉRMINOS Y CONDICIONES DEL SITIO</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <p class="text-warning text-left">* Al tildar la opción, usted está aceptando los términos y condiciones anteriormente estipulados y comprometiéndose en cumplirlos.</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection()