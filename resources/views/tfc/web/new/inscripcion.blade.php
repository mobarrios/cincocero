@extends('tfc.web.new.template')
@section('css')
    <style>

        .termsyconds{
            border:1px solid #ddd;
            height: 300px;
            width:100%;
            overflow:auto;
            padding: 10px;
        }

        .termsyconds h4{
            text-align: center;
        }

        .mt60{
            margin-top:150px;
        }

        .mb180{
            margin-bottom:180px;
            overflow:visible;
        }

        form{
            margin-top:100px;
        }

        form input[type="text"],form input[type="password"],form select{
            width: 100% !important;
            padding: 4px 9px;
        }

        .element-input{
            margin-right:-22px;
        }

        .image {
            text-align:left !important;
        }

        .image span {
            width: 10% !important;
            display: block;
            float: left;
        }

        .image input{
            width: 90% !important;;
        }

    </style>
@endsection

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
                                            <h2>COMPLETA EL FORMULARIO</h2>
                                        </div>
                                        <div class="contact-text">Usuario registrado con exito.</div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center mt60 mb180">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    {{--<div class="mb-20 mb-md-10">--}}
                        {{--<ul>--}}
                            {{--@if($errors->count()!= 0)--}}
                                {{--@foreach($errors->all() as $error)--}}
                                    {{--<li>{{$error}}</li>--}}
                                {{--@endforeach--}}
                            {{--@endif--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="map-wrap">


                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1">
                                           
                                            <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                                <div class="contact-form uk-height-1-1">
                                                    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                        
                                                        
                                                        <!-- Start Formoid form-->
                                                        <link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
                                                        <script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
                                                        {!! Form::open(['route'=>'postRegistration','class' => 'formoid-solid-blue','files' => true]) !!}

                                                            <div class="title">
                                                                <h2>Formulario de Registro</h2>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title">
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <div class="item-cont">
                                                                    {!! Form::text('dni',null ,['class'=>'medium','placeholder'=>'DNI','required' => 'required']) !!}
                                                                    <span class="icon-place"></span>
                                                                </div>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title">
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <div class="item-cont">
                                                                    {!! Form::text('last_name',null ,['class'=>'large','placeholder'=>'APELLIDO','required' => 'required']) !!}
                                                                    <span class="icon-place"></span>
                                                                </div>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title"></label>
                                                                <span class="nameLast">
                                                                    {!! Form::text('name',null ,['class'=>'large','placeholder'=>'NOMBRE','required' => 'required']) !!}
                                                                    <span class="icon-place"></span>
                                                                </span>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title">
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <div class="item-cont">
                                                                    {!! Form::text('mail',null ,['class'=>'large','placeholder'=>'E-MAIL','required']) !!}
                                                                    <span class="icon-place"></span>
                                                                </div>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title"></label>
                                                                <div class="item-cont">
                                                                    {!! Form::text('phone',null ,['class'=>'large','placeholder'=>'FECHA DE NACIMIENTO','id' => 'dob']) !!}
                                                                    <span class="icon-place"></span>
                                                                </div>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title"></label>
                                                                <div class="item-cont">
                                                                    {!! Form::text('cel',null ,['class'=>'large','placeholder'=>'CELULAR']) !!}
                                                                    <span class="icon-place"></span>
                                                                </div>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title"></label>
                                                                <div class="item-cont">
                                                                    <div class="image">
                                                                        <span class="pull-left" for="image">Foto:</span>
                                                                        {!! Form::file('image',['class'=>'large pull-left']) !!}
                                                                        <span class="icon-place"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title"></label>
                                                                <div class="item-cont">
                                                                    <div class="large">
                                                                        <span>
                                                                            {!! Form::select('teams_id',['0'=>'Seleccionar Equipo'] + $teams ,['class'=>'large','required'=>'required']) !!}
                                                                            <i></i>
                                                                            <span class="icon-place"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="element-input">
                                                                <label class="title"></label>
                                                                <div class="item-cont">
                                                                    <input type="password" name="password" id="password" class="large" placeholder="Password"  required>
                                                                    <span class="icon-place"></span>
                                                                </div>
                                                            </div>
                                                        <div class="mb-20 mb-md-10 form-group termsyconds">
                                                            <h4 class="modal-title text-center" style="color:#376906;">SOLICITUD DE INSCRIPCIÓN INDIVIDUAL</h4>
                                                            <h4 class="modal-title text-center" style="color:#376906;">DECLARACIÓN A TITULO PERSONAL Y EXIMICIÓN DE RESPONSABILIDAD CIVIL</h4>
                                                            <p>
                                                                Por medio de la presente, solicito la inscripción como jugador de los torneos de futbol, partidos
                                                                amistosos y/u otras actividades deportivas y sociales que organiza y desarrolla The Futbol Company
                                                                (TFC) en los predios destinados y contratados por la Organización para tal fin como ser: el Club del
                                                                Sindicato de Empleados de Comercio (SEC), Club de la Federacion Obreros y Empleados
                                                                Telefonicos de Republica Argentina (FOETRA), Club de Asociación de Empleados Fiscales e
                                                                Ingresos Publicos (AEFIP), Club del Sindicato de Empleados Textiles de la Industria y Afines (SETIA).
                                                            <p>
                                                            </p>
                                                            Así mismo deja constancia por la presente que la Organización (The Futbol Company) le ha exigido
                                                            un certificado de aptitud física extendido por profesional médico de conformidad con los términos del
                                                            Art. 6º del Anexo 1 del decreto 1821/2004 reglamentario de la ley numero 139 de la CABA.
                                                            <p>
                                                            </p>
                                                            Declara que el mismo le ha sido extendido encontrándose en su poder, por lo que exime a la organización de
                                                            toda responsabilidad por la falta de entrega del certificado requerido. Adicionalmente al certificado
                                                            requerido declara saber que está en condiciones físicas y de de salud suficientes para la práctica de
                                                            deportes y de las actividades organizadas por TFC asumiendo la responsabilidad que se desprende
                                                            Expresado todo lo cual le solicita a TFC la inscripción de manera voluntaria en las actividades allí
                                                            organizadas, liberando en virtud del presente documento tanto a los organizadores como a el o los
                                                            propietarios del predio de cualquier responsabilidad que les cupiere por las contingencias de la
                                                            práctica del deporte o las actividades desarrolladas dentro del predio o frente a cualquier lesión y/o
                                                            agravamiento de lesión que pudiera recibir con o sin la intervención de terceros durante el desarrollo
                                                            de las actividades, frente a cualquier reclamo que el organizador o el o los propietarios del predio
                                                            reciba/n de terceros y que tenga origen en su actuación o comportamiento, asume el compromiso de
                                                            mantenerlos a ambos: organizador y propietario, indemnes frente a los mismos.
                                                            <p>
                                                            </p>
                                                            Asímismo se compromete a mantener indemnes tanto a la organización como a el o los propietarios del predio, frente a cualquier daño que sufra en las instalaciones antes durante y/o después de la práctica
                                                            deportiva, frente a cualquier daño que puedan sufrir, los bienes que ingresase al predio, frente a
                                                            cualquier daño que reciban las personas que ingresen con el como acompañantes no inscriptos.
                                                            <p>
                                                            </p>
                                                            Esta declaración se mantendrá vigente mientras el solicitante intervenga en este o cualquier otro torneo y/o actividad deportiva o social en el predio de TFC y/o organizada por la organización. A los efectos expresados se guarda una copia en formato digital en poder de la organización.
                                                            </p>
                                                            <label class="text-center" style="display:block;font-size:1.2em;">Acepto términos y condiciones <input type="checkbox" name="terms" value="terms" class="input-md" required></label>
                                                        </div>
                                                            <div class="submit"><input type="submit" value="Registrar"/>
                                                            </div>
                                                        {!! Form::close() !!}
                                                        <script type="text/javascript" src="formoid_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->


                                                    </div>
                                                </div>
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
@endsection

@section('js')
    <script>

        $(document).ready(function(){
            $('#dob').datepicker({
                changeYear: true,
                yearRange: "c-60:c"
            });
            $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
                dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
        });


    </script>
@endsection