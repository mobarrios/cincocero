<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Motonet
    </title>

    <base href="{!! asset('') !!}">
    <!-- Bootstrap core CSS -->
    <link href="assets/inspinia/css/bootstrap.css" rel="stylesheet">

    <link href="assets/inspinia/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="assets/inspinia/css/animate.css" rel="stylesheet">
    <!-- Finder -->
    <link href="assets/css/finder.css" rel="stylesheet">

    <!-- Menu -->
    <link href="assets/css/menu.css" rel="stylesheet">

    @yield('css')

            <!-- Mainly scripts -->
    <script src="assets/inspinia/js/jquery-2.1.1.js"></script>
    <script src="assets/angle/js/bootstrap.js"></script>
    <script src="assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/inspinia/js/inspinia.js"></script>
    <script src="assets/inspinia/js/plugins/pace/pace.min.js"></script>
    <script src="assets/inspinia/js/plugins/wow/wow.min.js"></script>
    <script src="assets/js/finder.js"></script>

</head>
<body class="landing-page">

<div class="navbar-wrapper">
    <div class="marca">
        <a class="navbar-brand" href="{{route('index')}}"><img src="assets/web/img/logo-blanco.png" alt="motonet" width="300px" class="img-responsive"></a>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="redes">
                <ul>
                    <li><a href="https://www.facebook.com/motonetonline?ref=hl" target="_blank" class="fa fa-facebook-square"></a></li>
                    <li><a href="https://www.facebook.com/motonetonline?ref=hl" target="_blank" class="fa fa-twitter-square"></a></li>
                    <li><a href="https://www.facebook.com/motonetonline?ref=hl" target="_blank" class="fa fa-instagram"></a></li>
                    <li><a href="https://www.facebook.com/motonetonline?ref=hl" target="_blank" class="fa fa-youtube-square"></a></li>
                </ul>
            </div>
            {{--<div id="navbar" class="navbar-collapse collapse pull-right">--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<li><a class="page-scroll" href="#page-top">Destacados</a></li>--}}
            {{--<li><a class="page-scroll" href="#features">100cc</a></li>--}}
            {{--<li><a class="page-scroll" href="#team">150cc</a></li>--}}
            {{--<li><a class="page-scroll" href="#testimonials">600cc</a></li>--}}
            {{--<li><a class="page-scroll" href="#pricing">1000cc</a></li>--}}
            {{--<li><a class="page-scroll" href="#contact">Contacto</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
        </div>
    </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    {{--<ol class="carousel-indicators">--}}
    {{--<li data-target="#inSlider" data-slide-to="0" class=""></li>--}}
    {{--<li class="active" data-target="#inSlider" data-slide-to="1"></li>--}}
    {{--</ol>--}}
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>ENCONTRÁ MÁS<br>
                        DE 1000 PRODUCTOS<br>
                        EN NUESTRA WEB<br>
                    </h1>
                    <p>Motos, cuatriciclos, generadores y accesorios.</p>
                    {{--<p>--}}
                    {{--<a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>--}}
                    {{--<a class="caption-link" href="#" role="button">Inspinia Theme</a>--}}
                    {{--</p>--}}
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one" style="background: url('assets/web/img/fondo1.jpg') center bottom"></div>

        </div>
        {{--<div class="item active">--}}
        {{--<div class="container">--}}
        {{--<div class="carousel-caption blank">--}}
        {{--<h1>We create meaningful <br> interfaces that inspire.</h1>--}}
        {{--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>--}}
        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Set background for slide in css -->--}}
        {{--<div class="header-back two"></div>--}}
        {{--</div>--}}
    </div>
    {{--<a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">--}}
    {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
    {{--<span class="sr-only">Previous</span>--}}
    {{--</a>--}}
    {{--<a class="right carousel-control" href="#inSlider" role="button" data-slide="next">--}}
    {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
    {{--<span class="sr-only">Next</span>--}}
    {{--</a>--}}
</div>

    @include('motonet/web/includes/menu')

    @include('motonet/web/includes/slider')

    <section id="destacados" class="gray-section contact">
        <div class="col-xs-12" >
            <img class="img-responsive center-block" src="http://www.todopago.com.ar/sites/todopago.com.ar/files/kit_banner_promocional_728x90.jpg" alt="" />
        </div>

        <div class="container">

            <h1>Destacados</h1>


                @foreach($publications as $publication)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="ibox-title">

                                <img class="thumbnail img-rounded img-responsive" src="{{$publication->Models->Brands->Images->first()->image }}" width="60" height="60">

                            </div>
                            <div class="product-imitation">
                                <img src="{{$publication->Models->Images->first()->image}}  " alt="foto">
                            </div>

                            <div class="product-desc">
                                    <span class="product-price">
                                        ${{$publication->price}}
                                    </span>
                                <small class="text-muted">{{$publication->Models->name}}</small>
                                <h2 class="product-name"> {{$publication->title}}</h2>

                                <div class="m-t text-righ">
                                    <a href="{!! route('productDetail',$publication->id )!!}" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        @include('motonet/web/index/accesorios')
        @include('motonet/web/index/seguro')
        @include('motonet/web/index/servicioTecnico')
        @include('motonet/web/index/metodosDePagos')


    </section>


<footer>
    <p>&copy;Motonet -  Av. Ricardo balbin 486 - San Miguel - Buenos Aires - 0810-333-6686 </p>
</footer>

@yield('js')

<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 250;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll');
                $('.navbar2').addClass('fixed-top');
            }
            else {
                $(header).removeClass('navbar-scroll');
                $('.navbar2').removeClass('fixed-top');
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

    $('#myCarousel').find('.item').first().addClass('active');

</script>



</body>
</html>
