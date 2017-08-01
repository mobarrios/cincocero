@extends('tfc.web.new.template')

@section('content')
        <div class="tm-bottom-a-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="contact-page">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="contact-title">
                                            <h2>ENVIANOS TU MENSAJE</h2>
                                        </div>
                                        <div class="contact-text">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="contact-socials-wrap">
                                            <ul class="contact-socials">
                                                <li><a href="#"><i class="uk-icon-facebook"></i></a></li>
                                                <li><a href="#"><i class="uk-icon-twitter"></i></a></li>
                                                <li><a href="#"><i class="uk-icon-youtube"></i></a></li>
                                                <li><a href="#"><i class="uk-icon-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid" data-uk-grid-match="{target:'.contact-enquiries'}">
                                    <div class="uk-width-medium-1-3 uk-panel">
                                        <div style="min-height: 139px;" class="contact-enquiries">
                                            <div class="title">The Futbol Company</div>
                                            <div class="phone"><i class="uk-icon-phone"></i>(011)-2105.3478</div>
                                            <div class="mail">
                                                <i class="uk-icon-envelope"></i>
                                                <a href="malto:info@thefutbolcompany.com">
                                                  info@thefutbolcompany.com
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-3 uk-panel">
                                        <div style="min-height: 139px;" class="contact-enquiries">
                                            <div class="title">Torneos</div>
                                            <div class="phone"><i class="uk-icon-phone"></i>(011)-2105.3478</div>
                                            <div class="mail">
                                                <i class="uk-icon-envelope"></i>
                                                <a href="malto:sergio@thefutbolcompany.com">
                                                    sergio@thefutbolcompany.com
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-3 uk-panel">
                                        <div style="min-height: 139px;" class="contact-enquiries">
                                            <div class="title">Inscripciones</div>
                                            <div class="phone"><i class="uk-icon-phone"></i>(011)-2105.3478</div>
                                            <div class="mail">
                                                <i class="uk-icon-envelope"></i>
                                                <a href="malto:mauro@thefutbolcompany.com">
                                                   juga@thefutbolcompany.com
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="map-wrap">

                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                            <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                                <div class="contact-info-lines uk-vertical-align-middle">
                                                    <div class="item phone"><span class="icon"><i class="uk-icon-phone"></i></span>(011)-2105.3478</div>
                                                    <div class="item mail"><span class="icon"><i class="uk-icon-envelope"></i></span><a href="mailto:info@thefutbolcompany.com">info@thefutbolcompany.com</a>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                                <div class="contact-form uk-height-1-1">
                                                    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                        <div class="contact-form-title">
                                                            <h2>Contactanos</h2>
                                                        </div>
                                                        <div id="aiContactSafe_form_1">
                                                            <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                                <div class="contentpaneopen">
                                                                    <div id="aiContactSafeForm">
                                                                        {!! Form::open(['route'=>'postContact','method' => 'post','id' => 'adminForm_1']) !!}

                                                                            <div id="displayAiContactSafeForm_1">
                                                                                <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                                    <div class="aiContactSafe" id="aiContactSafe_info"></div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Nombre</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="name" id="aics_name" class="textbox" placeholder="Nombre" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Mensaje</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <textarea name="message" id="aics_message" cols="40" rows="10" class="editbox" placeholder="Mensaje"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <div id="aiContactSafeBtns">
                                                                                <div id="aiContactSafeButtons_center" style="clear:both; display:block; text-align:center;">
                                                                                    <table style="margin-left:auto; margin-right:auto;">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div id="aiContactSafeSend_loading_1">&nbsp;</div>
                                                                                                </td>
                                                                                                <td id="td_aiContactSafeSendButton">
                                                                                                    <input id="aiContactSafeSendButton" value="Enviar" type="submit">
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        {!! Form::close() !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    window.map = false;
                                                            
                                    
                                                            
                                    function initialize(){
                                        var myLatlng = new google.maps.LatLng(-34.595034,-58.51029510000001);
                                    
                                        var mapOptions = {
                                            zoom:16,
                                            center: myLatlng,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                                            scrollwheel: false,

                                            streetViewControl:false,
                                            overviewMapControl:false,
                                            mapTypeControl:false    
                                            
                                        };
                                        
                                        window.map = new google.maps.Map(document.getElementById('map'), mapOptions);                                                                                                                                                                                                                                                                               
                                        
                                    }
                                
                                    google.maps.event.addDomListener(window, 'load', initialize);
                                </script>            
                            <div id="map"></div>
                                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
@endsection
