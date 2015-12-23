@extends('tfc/web/template')
    @section('content')
        <div class="center-col">

            <center><div class="breadcrumb clearfix">CONTACTANOS<span class="bottom-line"></span>
                </div></center>
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div id="contact-box">
                        <h5 class="contact-title clearfix">ENVIANOS TU MENSAJE</h5>
                        <form id="contact-form" class="clearfix" action="processForm.php" method="post">
                            <span class="c-note">Completa los datos con <span>*</span> para poder enviarnos tu consulta, pronto alguien se contactará </span>

                            <p class="input-block">
                                <label for="contact_name" class="required">Name <span>*</span></label>
                                <input type="text" value="Nombre y Apellido *" onfocus="if(this.value=='Name *')this.value='';" onblur="if(this.value=='')this.value='Name *';" id="contact_name" name="name" class="valid">
                            </p>
                            <p class="input-block">
                                <label for="contact_email" class="required">Email <span>*</span></label>
                                <input type="text" value="Email *" onfocus="if(this.value=='Email *')this.value='';" onblur="if(this.value=='')this.value='Email *';" id="contact_email" name="email" class="valid">
                            </p>
                            <p class="input-block">
                                <label for="contact_url" class="required">Website:</label>
                                <input type="text" name="url" class="valid" value="Tema del Mensaje" onfocus="if(this.value=='Website')this.value='';" onblur="if(this.value=='')this.value='Website';" id="contact_url">
                            </p>

                            <div class="clear"></div>

                            <p class="textarea-block">
                                <label for="contact_message" class="required">Your message <span>*</span></label>
                                <textarea onfocus="if(this.value=='Your message *')this.value='';" onblur="if(this.value=='')this.value='Your message *';" name="message" id="contact_message" cols="88" rows="6">Su Mensaje *</textarea>
                            </p>

                            <p class="contact-button clearfix">
                                <span class="submit-wrapper"><input type="submit" value="Enviar Mensaje" id="submit-contact"></span>
                            </p>

                        </form>
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