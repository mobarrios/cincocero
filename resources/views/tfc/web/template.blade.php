<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('') }}"/>

    <meta charset="utf-8">
    <title>The Futbol Company. Profesionales en Futbol Amaterus.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="assets/web/css/bootstrap.css" media="screen" />
    <link rel="stylesheet" href="assets/web/css/font-awesome.css" media="all" />
    <link rel="stylesheet" href="assets/web/css/superfish.css" media="all" />
    <link rel="stylesheet" href="assets/web/css/owl.carousel.css" media="all" />
    <link rel="stylesheet" href="assets/web/css/owl.theme.css" media="all" />
    <link rel="stylesheet" href="assets/web/css/flexslider.css" media="all" />
    <link rel="stylesheet" href="assets/web/css/colorbox.css" media="all" />
    <link rel="stylesheet" href="assets/web/css/color-options.css" media="all" />
    <link rel="stylesheet" href="assets/web/css_mas/style.css">
    <link rel="stylesheet" href="assets/web/style.css">
    <link rel="stylesheet" href="assets/web/css/fonts.css">
    <link href="assets/web/css/responsive.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=adsense&amp;sensor=true&amp;language=es&amp;components=country:AR"></script>
    <script src="assets/web/js/modernizr.custom.js"></script>
    <script src="assets/web/js/custom.js" charset="utf-8"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>
    <script src="assets/web/js/respond.min.js"></script>
    <link rel="stylesheet" href="assets/web/css/ie.css" type="text/css" media="all" />
    <![endif]-->

    <!-- Style -->
    <link rel="stylesheet" href="assets/web/css/skin/black.css" type="text/css" id="colors" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600' rel='stylesheet' type='text/css'>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/web/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/web/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/web/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/web/img/apple-touch-icon-114x114.png">

</head>

<body class="punica-header-3 punica-footer-3 punica-home-1">

<div class="punica-header"><!-- punica-header-top --><!-- punica-header-middle -->

    <div class="punica-header-bottom">

        <div class="wrapper clearfix">

            @include('tfc/web/menu/menuTemplate')
            <!-- main-nav -->

        </div>
        <!-- wrapper -->

    </div>
    <!-- punica-header-bottom -->

</div>
<!-- logos torneo -->

<div class="punica-header"><!-- punica-header-top --><!-- punica-header-middle -->

    <div class="punica-header-bottom">

        <div class="wrapper clearfix">

            <nav id="main-nav" class="pull-left">

                <ul id="main-menu" class="clearfix">
                    <li class="current-menu-item"></li>
                    @foreach(\App\Entities\tfc\Categories::all() as $cat)
                        <li class="current-menu-item">
                            <a href="{{route('principal',$cat->id)}}"><img src="{{$cat->images->first()->image}}" width="150" height="59" alt=""/></a></li>
                        <li>
                    @endforeach
                </ul>
                <!-- main-menu -->

                <i class='fa fa-align-justify'></i>

                <div class="mobile-menu-wrapper">
                    <ul id="mobile-menu">
                        @foreach(\App\Entities\tfc\Categories::all() as $cat)
                            <li class="current-menu-item">
                                <a href="{{route('principal',$cat->id)}}"><img src="{{$cat->images->first()->image}}" width="150" height="59" alt=""/></a></li>
                            <li>
                        @endforeach
                    </ul>
                    <!-- mobile-menu -->
                </div>
                <!-- mobile-menu-wrapper -->

            </nav>
            <!-- main-nav -->


            <!--search-box-->

        </div>
        <!-- wrapper -->

    </div>
    <!-- punica-header-bottom -->

</div>
<!-- punica-header -->

    @if(Session::has('categoria'))
        <ol class="breadcrumb">
            <li>{!! Session::get('categoria')->name!!}</li>
            @if(Session::has('fase'))
                <li class="active">{!! \App\Entities\tfc\Fases::find(Session::get('fase'))->name !!}</li>
            @endif
        </ol>
    @endif
<div id="punica-main-content">
    <div class="wrapper clearfix">

        @yield('content')

        <!-- right-sidebar -->

        <div class="clear"></div>
        <!-- widget-area-6 -->

    </div>
    <!-- wrapper -->

</div>
<!-- punica-main-content -->

<footer class="punica-footer"><!-- punica-footer-top -->

    <div class="punica-footer-bottom">

        <div class="wrapper"><!-- punica-left-col --><!-- punica-right-col -->

            <div class="punica-end clearfix">
                <ul class="social-links clearfix">
                    <li><span>Seguinos a través de:</span></li>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                </ul>
                <!-- social-links -->
                <p id="copyright">Copyright &copy; 2015 . TheFutbolCompany.com - Designed By  <a href="http://www.navcoder.net" target="_blank" class="navcoder"><span class="nav">Nav</span><span class="coder">{coder}</span></a></p>
            </div>
            <a href="" data-toggle="modal" data-target="#termYcond">Términos y condiciones</a>
            <span class="clearfix"></span>
        </div>
        <!-- wrapper -->

    </div>
    <!-- punica-footer-bottom -->

</footer>
<!-- punica-footer -->


<!-- Modal -->
<div class="modal fade" id="termYcond" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel" style="color:#376906;">TÉRMINOS Y CONDICIONES DE <span class="nav2">NAV</span><span class="coder">{CODER}</span></h4>
            </div>
            <div class="modal-body">
                <h4>Términos y Condiciones del Uso</h4>

                <h4>1. Introducción</h4>
                <p>Navcoder invita a Ud. a visitar su sitio Web y le informa los Términos y Condiciones que regulan la utilización del mismo y con los cuales se considera que Ud. presta conformidad por dicha utilización.</p>
                <h4>2. Información</h4>
                <p>Toda información o recomendación proporcionada en este sitio Web tiene la función de orientar y asistir a quien lo visita y es brindada de buena fe por Navcoder Sin embargo, Navcoder no asume responsabilidad por la utilización, aplicación y/o procesamiento que los usuarios pudieren darle a dicha información ni otorga garantía sobre la exactitud de sus contenidos.</p>
                <p>Por tal motivo, Navcoder no se responsabiliza por cualquier decisión o medida que Ud. pudiere adoptar basándose en la información contenida en este sitio Web, ni por los perjuicios que se deriven de ella. La utilización de dicha información es de riesgo exclusivo del usuario.</p>
                <p>La información incluida en este sitio podrá actualizarse y/o modificarse periódicamente, por lo tanto la misma no debe interpretarse como definitiva.</p>
                <p>Navcoder no asume responsabilidad por los virus o vicios informáticos que el usuario pudiere contraer visitando nuestro sitio Web.</p>
                <h4>3. Vínculos con sitios externos</h4>
                <p>Este sitio Web puede incluir vínculos con sitios Web externos que no pertenecen a Navcoder y de los cuales éste no se responsabiliza por su contenido o cualquier consecuencia que pudieren derivar del ingreso a los mismos y/o su utilización.</p>
                <p>La función de los vínculos que aparecen en esta página es exclusivamente la de informarle a Ud. sobre la existencia de otras fuentes de información en Internet, donde podrá eventualmente ampliar los datos ofrecidos en este sitio e informarse sobre servicios y/o productos. Dichos vínculos no suponen una sugerencia, invitación o recomendación para la visita de los lugares de destino.</p>
                <h4>4. Derechos de autor y propiedad intelectual</h4>
                <p>Este sitio Web contiene material, incluyendo, sin carácter taxativo, textos, fotografías, y otras imágenes y sonido, que se halla protegido por derechos de autor y/u otros derechos de propiedad intelectual. Los derechos de autor y otros derechos de propiedad intelectual sobre dicho material pertenecen a Navcoder o han sido otorgados bajo licencia a Navcoder por el/los titular/es de dichos derechos, de forma tal que Navcoder puede utilizar este material como parte de este sitio Web.
                    <br>
                Todas las marcas comerciales incluidas en este sitio Web son de propiedad de Navcoder o han sido otorgadas bajo licencia o autorización a Navcoder por el/los titular/es de dichas marcas para su utilización en este sitio Web.
                    <br>
                La reproducción de los contenidos descriptos precedentemente se encuentra prohibida, salvo previa autorización por escrito de Navcoder, salvo que se destinen a un uso exclusivamente personal y sin que en ningún caso el usuario adquiera derecho alguno sobre los mismos.</p>
                <h4>5. Modificaciones de estos Términos y Condiciones</h4>
                <p>Navcoder se reserva el derecho de modificar en cualquier momento, en forma unilateral y a su solo juicio, los presentes Términos y Condiciones. Al navegar por este sitio Web, Ud. acepta estar obligado por los Términos y Condiciones que se encuentran vigente a tal fecha y por lo tanto debe verificar previamente los mismos cada vez que visita este sitio.</p>

                <h4>6. Dudas e Inquietudes</h4>
                <p>En caso de tener inquietudes con relación a los presentes Términos y Condiciones, sírvase contactarse con nosotros enviándonos un e-mail a info@navcder.net.</p>

                <h4>7. Ley Aplicable y Jurisdicción</h4>
                <p>Los presentes Términos y Condiciones se rigen por la legislación de la República Argentina. Los usuarios del sitio Web de Navcoder se someten a la jurisdicción de los Tribunales Ordinarios de la Ciudad Autónoma de Buenos Aires de la República Argentina, renunciando a cualquier otro fuero o jurisdicción que resultara aplicable.</p>

                <h4>Política de Privacidad</h4>
                <p>El ingreso de datos personales del usuario en el sitio Web de Navcoder no constituye requisito para navegar por el mismo. El usuario que decide ingresar sus datos personales manifiesta conocer y aceptar lo siguiente:
                    <ul>
                        <li>(i) El destinatario de dichos datos personales es Navcoder, quien podrá utilizar los mismos a los fines del desarrollo de su actividad comercial. Asimismo, los datos personales brindados por el usuario serán incorporados al banco de datos de Navcoder y podrán ser utilizados por Navcoder. a los efectos de elaborar estadísticas generales, sin identificar al usuario, realizarle consultas o comunicarse con él.</li>
                        <li>(ii) El aporte de los datos personales es facultativo para el usuario.</li>
                        <li>(iii) El usuario garantiza la veracidad y certeza de los datos personales que ingresa en este sitio Web, por lo que asume la correspondiente responsabilidad en caso que los mismos resulten ser inexactos. Navcoder.  no asume ninguna responsabilidad en el caso de inexactitud de los datos personales ingresados por el usuario en este sitio Web.</li>
                    </ul>
                El usuario que ingrese sus datos personales podrá en cualquier momento solicitar que se le informe el contenido de los mismos y podrá solicitar las rectificaciones o supresiones que entienda convenientes.
                <br>
                El usuario al visitar el sitio Web de Navcoder. presta conformidad para la instalación de dispositivos informáticos (cookies) a los efectos de facilitar la utilización y comunicación por el usuario de nuestro sitio en futuras visitas y permitir la elaboración de análisis estadísticos.</p>
            </div>
        </div>
    </div>
</div>

<script src="assets/web/js/jquery-1.10.2.min.js"></script>
<script src="assets/web/js/retina.js"></script>
<script src="assets/web/js/bootstrap.min.js"></script>
<script src="assets/web/js/colorswitch.js"></script>
<script src="assets/web/js/custom.js" charset="utf-8"></script>
@yield('js')
</body>

</html>
