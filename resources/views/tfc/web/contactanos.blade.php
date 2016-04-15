@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <div class="center-col">

            <center><div class="breadcrumb clearfix">CONTACTANOS<span class="bottom-line"></span>
                </div></center>
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div id="contact-box">
                        <h5 class="contact-title clearfix">ENVIANOS TU MENSAJE</h5>
                        {!! Form::open(['route'=>'postContact','class'=>'clearfix','method' => 'post','id' => 'contact-form']) !!}
                            <span class="c-note">Completa los datos con <span>*</span> para poder enviarnos tu consulta, pronto alguien se contactará </span>

                            <p class="input-block">
                                <label for="contact_name" class="required">Name <span>*</span></label>
                                <input type="text" placeholder="Nombre y Apellido *" id="contact_name" name="name" class="valid">
                            </p>
                            <p class="input-block">
                                <label for="contact_email" class="required">Email <span>*</span></label>
                                <input type="text" placeholder="Email *" id="contact_email" name="email" class="valid">
                            </p>
                            <p class="input-block">
                                <label for="contact_url" class="required">Website:</label>
                                <input type="text" name="tema" class="valid" placeholder="Tema del Mensaje" id="contact_url">
                            </p>

                            <div class="clear"></div>

                            <p class="textarea-block">
                                <label for="contact_message" class="required">Your message <span>*</span></label>
                                <textarea name="message" id="contact_message" cols="88" rows="6" placeholder="Su mensaje"></textarea>
                            </p>

                            <p class="contact-button clearfix">
                                <span class="submit-wrapper"><input type="submit" value="Enviar Mensaje" id="submit-contact"></span>
                            </p>

                        {!! Form::close() !!}
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
    @endsection