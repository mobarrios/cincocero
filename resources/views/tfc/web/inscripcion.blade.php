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
                                    {!! Form::file('image',['class'=>'input-md form-control']) !!}
                                </div>
                                <div class="mb-20 mb-md-10 form-group selectEquipos">
                                    {!! Form::select('teams_id',['0'=>'Seleccionar Equipo'] + $teams ,['class'=>'input-md form-control','required'=>'required']) !!}
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password"  required>
                                </div>
                            <hr>
                                <div class="mb-20 mb-md-10 form-group termsyconds">
                                    <h4 class="modal-title text-center" style="color:#376906;">TERMINOS Y CONDICIONES DE PARTICPACION
                                        EN THE FUTBOL COMPANY</h4>
                                    <h4>SOLICITUD DE INSCRIPCIÓN INDIVIDUAL <br>
                                        DECLARACIÓN A TITULO PERSONAL Y EXIMICIÓN DE RESPONSABILIDAD CIVIL REGLAMENTO GENERAL DEL TORNEO</h4>
                                    <p>

                                        Por medio de la presente, solicito la inscripción como jugador de los torneos de futbol,partidos amistosos y/u otras actividades deportivas y sociales que organiza y desarrolla TheFutbol Company (TFC) en los predios destinados y contratados por la Organización para tal fin como ser.
                                        <br>
                                        Así mismo deja constancia por la presente que la Organización (The Futbol Company) le ha exigido un certificado de aptitud física extendido por profesional médico de conformidad con los términos del Art. 6º del Anexo 1 del decreto 1821/2004 reglamentario de la ley numero 139 de la CABA. Declara que el mismo le ha sido extendido encontrándose en su poder, por lo que exime a la organización de toda responsabilidad por la falta de entrega
                                        del certificado requerido.
                                        <br>
                                        Adicionalmente al certificado requerido declara saber que está en condiciones físicas y de salud suficientes para la práctica de deportes y de las actividades organizadas por TFC asumiendo la responsabilidad que se desprende de la presente declaración.
                                        <br>
                                        Expresado todo lo cual le solicita a TFC la inscripción de manera voluntaria en las actividades allí organizadas, liberando en virtud del presente documento tanto a los organizadores como a el o los propietarios del predio de cualquier responsabilidad que les cupiere por las contingencias de la práctica del deporte o las actividades desarrolladas dentro del predio o frente a cualquier lesión y/o agravamiento de lesión que pudiera recibir con o sin la intervención de terceros durante el desarrollo de las actividades, frente a cualquier reclamo que la Organización o el o los propietarios del predio reciba/n de terceros y que tenga origen en su actuación o comportamiento y asume el compromiso de mantenerlos a ambos, Organización y propietario, indemnes frente a los mismos.
                                        <br>
                                        Asímismo se compromete a mantener indemnes tanto a la Organización como a el o los propietarios del predio, frente a cualquier daño que sufra en las instalaciones antes durante y/o después de la práctica deportiva, frente a cualquier daño que puedan sufrir, los bienes que ingresase al predio, frente a cualquier daño que reciban las personas que ingresen con el como acompañantes no inscriptos. Esta declaración se mantendrá vigente mientras el solicitante intervenga en este o cualquier otro torneo y/o actividad deportiva o social en el predio de TFC y/o organizada por la Organización.</p>
                                    <label class="text-center" style="display:block;font-size:1.2em;">Acepto términos y condiciones <input type="checkbox" name="terms" value="terms" class="input-md" required></label>
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