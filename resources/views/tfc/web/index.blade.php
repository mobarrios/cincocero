<!DOCTYPE html>
<html>
    <head>
        <title>Futbol Amateur</title>
        <meta name="description" content="Sistema de gestiòn de Torneos de fútbol">
        <meta name="keywords" content="Futbol, sistemas, sistemas futbol, nav{coder},navcoder">
        <base href="{{asset('')}}"/>
        <meta charset="utf-8">
        <meta name="author" content="Nav{coder}">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href={{asset('images/favicon.png')}}>
        <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/web/css/bootstrap.css">
        <link rel="stylesheet" href="assets/web/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/web/css/custom.css">
        <link rel="stylesheet" href="assets/web/css/animate.min.css">
        <link rel="stylesheet" href="assets/web/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/web/css/flexslider.css">
        <link rel="stylesheet" href="assets/web/css/ie.css">
        <link rel="stylesheet" href="assets/web/css/responsive.css">
        <link rel="stylesheet" href="assets/web/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/web/css/imageModal.css">
        <link rel="stylesheet" href="assets/web/css/chosen.css">
        <link rel="stylesheet" href="assets/web/css/inputFile.css">
        <link rel="stylesheet" href="assets/web/style.css">

        <link rel="manifest" href="manifest.json">

        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <!-- JS -->
        <script type="text/javascript" src="assets/web/js/jquery.js"></script>
        <script type="text/javascript" src="assets/web/js/jquery-ui.js"></script>
        <script type="text/javascript" src="assets/web/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/web/js/inputFile.js"></script>
        <script type="text/javascript" src="assets/web/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="assets/web/js/SmoothScroll.js"></script>
        <script type="text/javascript" src="assets/web/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="assets/web/js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="assets/web/js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="assets/web/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script type="text/javascript" src="assets/web/js/gmap3.min.js"></script>
        <script type="text/javascript" src="assets/web/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/web/js/all.js"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="assets/web/js/placeholder.js"></script><![endif]-->
        <script type="text/javascript" src="assets/web/js/owl.carousel2.js"></script>

        {{--<script src="//rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.js"></script>--}}
        <script type="text/javascript" src="assets/web/js/imageModal.js"></script>
        <script type="text/javascript" src="assets/web/js/chosen.jquery.js"></script>


    </head>

    <body class="appear-animate">
        <div class="container-fluid">
            <header>
                <div class="brand-icon col-xs-5 col-sm-3 col-sm-offset-1">
                    <a href="#">
                        <img src="navFutbolLogoB.png" alt="Nav{futbol}" class="img-responsive" width="250">
                    </a>
                </div>
            </header>

            <nav class="navbar navbar-default navLanding">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="navFutbolLogoB.png" alt="Nav{futbol}" class="img-responsive" width="70"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorías <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Fútol 7</a></li>
                                    <li class="divider hidden-xs visible-sm"></li>
                                    <li><a href="#">Fùtbol 11</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Noticias <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Sedes</a></li>
                            <li><a href="#">Galería</a></li>
                            <li><a href="#">Inscripción</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>

                        <hr class="visible-xs hidden-sm hidden-md hidden-lg"/>

                        <ul class="nav navbar-nav navbar-right social">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">
                <div id="noticias" class="col-xs-12">
                    <h1 class="landing-header">Noticias</h1>

                    <div class="noticias owl-carousel owl-theme">
                        @foreach($noticias->get() as $n)
                            <div class="item">
                                <div class="item panel3 panel-default">
                                    <div class="panel3-body">
                                        <a href="{{$n->images->first()->image}}" title="{!! $n->title !!}" class="zoom" data-title="{!! date('F d, Y', strtotime($n->date)) !!}: {!! $n->title !!}" data-footer="{!! $n->detail !!}" data-type="image" data-toggle="lightbox">
                                            <img width="100%;" src="{{$n->images->first()->image}}">
                                            <span class="overlay"><i class="fa fa-arrows-alt"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <footer>
                                    <p>{!! $n->title !!}</p>
                                </footer>
                                {{--<a href="#" class="btn btn-block btn-default no-border-radius-top">Ver más</a>--}}
                            </div>
                        @endforeach
                    </div>
                </div>

                <hr>

                <div class="col-xs-12 col-sm-6" id="sedes">
                        <h1 class="landing-header">Sedes</h1>

                        <div class="sedesYgaleria owl-carousel owl-theme">
                            @foreach($sedes as $s)
                                <div class="item panel3 panel-default">
                                    <div class="panel3-body">
                                        <a href="{{$s->images->first()->image}}" title="{!! $s->name !!}" class="zoom" data-title="{!! $s->name !!}" data-footer="Dirección: {!! $s->address !!}" data-type="image" data-toggle="lightbox">
                                            <img width="100%;" src="{{$s->images->first()->image}}">
                                            <span class="overlay"><i class="fa fa-arrows-alt"></i></span>
                                        </a>
                                    </div>
                                    <footer>
                                        <p>{!! $s->name !!}</p>
                                    </footer>
                                </div>
                            @endforeach
                        </div>
                    </div>

                <div class="col-xs-12 col-sm-6" id="galeria">
                        <h1 class="landing-header">Galería</h1>

                        <div class="sedesYgaleria owl-carousel owl-theme">
                            @foreach($sedes as $s)
                                <div class="item panel3 panel-default">
                                    <div class="panel3-body">
                                        <a href="{{$s->images->first()->image}}" title="{!! $s->name !!}" class="zoom" data-title="{!! $s->name !!}" data-type="image" data-toggle="lightbox">
                                            <img width="100%;" src="{{$s->images->first()->image}}">
                                            <span class="overlay"><i class="fa fa-arrows-alt"></i></span>
                                        </a>
                                    </div>
                                    <footer>
                                        <p>{!! $s->name !!}</p>
                                    </footer>
                                </div>
                            @endforeach
                        </div>
                    </div>

            </div>

            <hr>

            <div class="container-fluid">
                <div id="inscripcion" class="bg-landing">
                    <h1 class="text-center text-uppercase pt-25 text-white">Participá</h1>

                    <div class="container">
                        <hr>

                        <div class="col-xs-12 col-md-6">
                            <h3 class="text-uppercase text-white">Reglamento</h3>
                            <textarea id="reglamento" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio arcu, tempor sed nibh eget, pretium faucibus elit. Nunc nec quam eget odio congue ultricies. Sed rutrum imperdiet turpis ut sodales. Morbi ultricies eros a tristique vestibulum. Praesent sagittis libero in diam cursus, a ultrices elit tempus. Donec in ante tortor. Ut aliquet tincidunt nulla, ultricies ultricies urna aliquam in. Integer et hendrerit mi, tempor tempor turpis. In eu dapibus sapien, et euismod neque. Cras egestas mauris rutrum facilisis egestas.
    Phasellus semper nibh vitae mauris posuere ultricies. Aenean lacinia molestie augue at faucibus. Mauris interdum pretium ullamcorper. Pellentesque orci eros, vestibulum vitae ultricies eu, iaculis sed dui. Aenean et lorem non quam hendrerit placerat. In vel urna ut velit maximus efficitur eu et purus. Donec magna nulla, venenatis ut arcu quis, blandit elementum magna. Pellentesque eleifend et felis at hendrerit. Fusce ornare finibus sapien et porttitor. Morbi molestie massa vitae condimentum pharetra. Ut varius ullamcorper ultricies. Duis sed euismod ante. Aliquam id pretium quam, feugiat pretium augue.
    In laoreet pharetra quam, vitae semper sapien lacinia hendrerit. Nam tortor enim, maximus et bibendum sed, efficitur et est. Nam eget enim vitae risus convallis ultrices convallis et arcu. Vivamus tempus at eros sit amet cursus. Etiam nec nibh ligula. Quisque gravida nisl nisi. Donec tellus mauris, scelerisque vel porta eu, blandit in eros. Etiam sit amet mi et eros bibendum aliquam. Aenean in mauris convallis, aliquam dolor quis, iaculis sem. Praesent vitae ex id risus efficitur tristique ac sit amet dolor. Sed accumsan massa eu fringilla dapibus. Ut iaculis, eros vel venenatis ornare, risus leo euismod eros, at finibus arcu diam nec est. In a sem eget est sodales maximus at et arcu. Nam faucibus tortor sit amet lacus rhoncus, sit amet consectetur massa rutrum. Suspendisse efficitur finibus lorem quis blandit. Ut sit amet sapien nec erat convallis pretium.
    Phasellus id consectetur dolor. Maecenas velit quam, lacinia eu quam ut, egestas molestie lectus. Phasellus eu augue a risus dapibus tincidunt ullamcorper ullamcorper diam. Quisque ullamcorper, augue et pretium porta, nibh erat commodo dui, sit amet mattis odio felis vel risus. Pellentesque feugiat, purus eget laoreet ultrices, lacus leo volutpat nunc, nec fringilla elit lacus id justo. Nam in dui nisi. Cras vitae orci vitae dui ullamcorper aliquam at non erat. Nunc a ipsum tristique, euismod elit id, ultrices arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus.
    Duis varius ante at nisl ultricies, non aliquet dolor maximus. In consequat, lacus non facilisis pulvinar, eros diam iaculis massa, euismod dignissim turpis justo ac odio. Cras finibus mauris a libero imperdiet tincidunt. Suspendisse finibus porta facilisis. Etiam vulputate mi magna. Vivamus ut urna quis sapien scelerisque convallis eu id nisl. Nam pharetra interdum gravida. Etiam convallis rhoncus nisi eu commodo.
    Proin nunc sem, tincidunt gravida posuere ut, consequat at enim. Aenean non ligula pulvinar, lobortis nibh ut, luctus magna. In metus lorem, efficitur at lobortis sit amet, tincidunt vitae mauris. Donec mattis arcu quis volutpat vulputate. Donec cursus mollis magna sed iaculis. Suspendisse leo nunc, lacinia ac venenatis malesuada, pretium eget eros. In egestas mauris nec sapien euismod placerat. Aliquam eget urna eleifend, scelerisque ligula et, maximus diam. Quisque semper dui at est porta, ac mollis ligula facilisis.
    Nam vitae ipsum non nisi mollis consectetur. Sed pellentesque, urna et tincidunt varius, lectus risus posuere nunc, quis porttitor purus libero id orci. Pellentesque malesuada pellentesque nunc, nec rhoncus nisl interdum ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elementum a ligula maximus mollis. Quisque convallis nisi eu vulputate fermentum. Nunc vehicula varius nisl, quis molestie elit tristique quis. Maecenas facilisis nisi eu blandit consequat.
    Aliquam sem turpis, iaculis id arcu eget, condimentum hendrerit libero. Suspendisse ut ipsum porttitor, hendrerit urna sed, pretium velit. Donec rutrum ipsum eget felis scelerisque feugiat. Nam rutrum augue id mattis sollicitudin. Fusce placerat purus eu efficitur lacinia. Aenean mollis varius odio, et fermentum lectus suscipit ut. Nunc quis neque sit amet massa luctus viverra. Duis semper in arcu vehicula fringilla.
    Praesent tempus est lectus, at vulputate lacus molestie sit amet. Nunc pulvinar risus a mauris ullamcorper, in dignissim lectus feugiat. Nulla dictum dolor iaculis magna semper iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras placerat sodales tristique. Praesent id faucibus quam. Curabitur cursus, purus id mollis tincidunt, arcu lectus volutpat mi, eget egestas mauris ipsum iaculis ipsum. Nam bibendum posuere sem sit amet facilisis. Ut at justo nec ipsum tristique pellentesque. Suspendisse quam nisl, ornare eu consectetur nec, rhoncus sed tellus. Fusce ullamcorper et purus vel consequat. Fusce ornare ex ut lectus tincidunt, a efficitur tellus condimentum.
    Sed accumsan nunc vitae augue convallis suscipit sit amet ut libero. Suspendisse tortor nunc, aliquam ac eleifend vel, porttitor nec tortor. Proin luctus gravida consectetur. Nullam ante massa, sodales ut condimentum eu, maximus ac mi. Duis quis elit ut sapien imperdiet blandit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi erat neque, pulvinar a risus vel, facilisis tincidunt augue. Cras quis dictum mi.
    Mauris pharetra pharetra eros, quis pellentesque nunc dignissim sit amet. Cras sit amet nisi dignissim, sagittis elit sit amet, ullamcorper neque. Vivamus volutpat risus eget auctor interdum. Suspendisse a egestas enim. Sed non arcu quis turpis condimentum tincidunt congue id sapien. Proin ultrices ante justo, quis pulvinar orci pretium a. Ut in mollis ante. Duis eleifend arcu risus, eget consectetur eros posuere sed. Vestibulum mattis odio vitae ex porttitor luctus. Etiam dolor lectus, laoreet lacinia nisl vitae, fringilla iaculis neque. Ut sit amet vehicula augue, sit amet tempus erat. Aliquam imperdiet consectetur eleifend. Nullam odio nisl, pharetra eu ligula in, malesuada euismod sem. Quisque et dui nec elit commodo finibus.
 Curabitur maximus condimentum risus, vehicula pharetra est dapibus id. Vivamus sollicitudin feugiat dictum. Vivamus scelerisque nec libero vel consectetur. Nam nec nisl iaculis justo facilisis bibendum. Nullam blandit ligula tortor, vel imperdiet nisl laoreet ac. Proin et ultricies arcu. Praesent vitae metus tincidunt, egestas elit id, pellentesque felis. Curabitur posuere mi sapien, vel accumsan diam venenatis non. Etiam a lorem ac tellus molestie iaculis sed eget libero. Sed posuere et eros ut vestibulum. Pellentesque efficitur libero odio, ac bibendum ex sodales ac. Sed efficitur purus nec faucibus pulvinar. Phasellus malesuada, tortor id laoreet dapibus, mauris tortor tincidunt mauris, eget aliquam orci nisl vel nisi.
    Etiam euismod felis tellus, nec varius quam maximus quis. Nulla facilisi. Fusce interdum tortor at augue vulputate, sed posuere sapien convallis. Vivamus elementum, mi ac luctus rutrum, ipsum risus suscipit justo, ac ultricies risus augue eget nisi. Morbi pulvinar dolor non ligula convallis euismod. Sed orci nisl, scelerisque eu risus quis, feugiat accumsan enim. Integer rhoncus odio nec lacus malesuada, vitae ultricies nisl dapibus. Nunc dapibus erat eget mi euismod, eu scelerisque massa mattis. Morbi ornare mi in est malesuada semper. Integer at lorem non justo egestas blandit. Nullam ac vulputate magna. Donec posuere nisl nisi, nec malesuada turpis consequat id. Donec porta, sem id viverra blandit, metus velit faucibus tortor, nec egestas erat ipsum nec lacus. Etiam vitae mi arcu.
    Vivamus eu massa imperdiet, interdum tellus nec, mattis est. Nulla vitae turpis vel sapien lobortis consectetur id a nibh. Cras nec tempor nunc, eu vulputate risus. Curabitur pulvinar consectetur ipsum non euismod. Integer sit amet rutrum arcu. Pellentesque consequat magna et lorem faucibus finibus. Mauris quis bibendum nisi. Curabitur libero nunc, varius aliquam massa non, aliquet molestie lorem. Sed sed eros molestie, imperdiet libero vel, facilisis velit. Nam at libero et magna pulvinar ullamcorper. Nam non lectus ornare tellus gravida condimentum eu sed neque. Donec venenatis egestas dignissim.
    In faucibus quam sit amet libero cursus ultricies. Quisque bibendum venenatis ex eu hendrerit. Aliquam lobortis eu lectus vitae porta. Sed rhoncus venenatis dui et volutpat. Nulla vestibulum, sem laoreet viverra efficitur, nisl risus laoreet ligula, quis pharetra ex magna vel nisi. Vestibulum tincidunt, velit in aliquam pellentesque, enim odio faucibus sem, at volutpat nisi mauris vel arcu. Proin ultrices scelerisque sagittis. Duis porttitor ornare interdum. Praesent vestibulum nibh in semper viverra. Pellentesque rhoncus mi sit amet consequat egestas. Nullam iaculis lacus ut luctus ultricies.
                            </textarea>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <h3 class="text-uppercase text-white">Inscripción</h3>

                            {!! Form::open(['route'=>'web','class'=>'form contact-form','files' => true,'id' => 'insc']) !!}
                                <div class="form-group">
                                    {!! Form::text('dni',null ,['class'=>'input-md form-control','placeholder'=>'DNI']) !!}
                                </div>
                                <div class="form-group medio">
                                    {!! Form::text('name',null ,['class'=>'input-md form-control','placeholder'=>'Nombre']) !!}
                                </div>
                                <div class="form-group medio pull-right">
                                    {!! Form::text('last_name',null ,['class'=>'input-md form-control','placeholder'=>'Apellido']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('mail',null ,['class'=>'input-md form-control','placeholder'=>'E-Mail','required']) !!}
                                </div>
                                <div class="form-group medio">
                                    {!! Form::text('phone',null ,['class'=>'input-md form-control','placeholder'=>'Fecha de nacimiento','id' => 'dob']) !!}
                                </div>
                                <div class="form-group medio pull-right">
                                    {!! Form::text('cel',null ,['class'=>'input-md form-control','placeholder'=>'Celular']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::fileCustomNoLabel('image')!!}
                                </div>
                                <hr>
                                <div class="form-group">
                                    {!! Form::select('teams_id',['0'=>'Seleccionar Equipo'] + $teams ,['class'=>'input-md form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password"  required>
                                </div>

                                <div class="form-group text-white text-center">
                                    <span>Acepto <a href="#">Términos y condiciones</a></span><input type="checkbox" class="">
                                </div>

                                <div class="pt-10 form-group text-center">
                                    <button class="submit_btn btn btn-mod btn-medium btn-round btn-full center-block" id="reg-btn">Enviar Solicitud</button>
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="container">
                <div id="contactanos" class="col-xs-12">
                    <h1 class="landing-header">Contactanos</h1>

                    {!! Form::open(['route'=>'postContact','class'=>'clearfix','method' => 'post','id' => 'contact-form']) !!}
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
                        <span class="submit-wrapper"><input type="submit" value="Enviar Mensaje" id="submit-contact" class="btn btn-medium btn-default"></span>
                    </p>

                    {!! Form::close() !!}
                    <div id="response"></div>
                </div>
            </div>
        </div>





        <!-- End Page Wrap -->
        


        <script>
            $('.noticias').owlCarousel({
                loop:true,
                margin:10,
                autoplay: true,
                autoplayTimeout:2000,
                autoplayHoverPause: true,
                animateIn:'fadeIn',
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    }
                }
            });

            $('.sedesYgaleria').owlCarousel({
                loop:true,
                margin:10,
                autoplay: true,
                autoplayTimeout:2000,
                autoplayHoverPause: true,
                animateIn:'fadeIn',
                responsive:{
                    0:{
                        items:1
                    }
                }
            });

            $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

            $("select").chosen();

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

        </script>
    </body>
</html>
