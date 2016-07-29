<!DOCTYPE html>
<html lang="en">
<head>
    <title>Motonet</title>
    <meta name="title" content="MOTO NET - Motos, Cuatriciclos - Hurlingham, Don Torcuato, San Miguel, Buenos Aires, Argentina" />
    <meta name="keywords" content="moto, planet, motoplanet, motos, motomel, yamaha, mondial, zanella, honda, hurlingham, hurlingam, torcuato, san miguel, buenos, aires, argentina, top, model, show, motos, atv, servicio, técnico, tecnico, accesorios, repuestos, lo, jack, jak, alarmas, seguros, posventa, calle, off, road, sdh, cg, storm, wave, biz, scooter, cub, business, custom, xl, xr, nxr, sport, cbx, cbr, xl, nt, enduro, crf, trx, cuatris, cuatriciclos" />
    <meta name="description" content="Concesionario multimarca de prodcutos Honda - Zanella - Mondial - Motomel - Yamaha. Asesoramiento personalizado, servicio técnico y repuestos originales, San Miguel, Buenos Aires, Argentina" />
    <meta name="language" content="es" />
    <meta http-equiv="content-language" content="es" />
    <meta http-equiv="language" content="spanish" />
    <meta name="DC.Language" scheme="RFC1766" content="spanish" />
    <meta name="distribution" content="global" />
    <meta name="resource-type" content="document" />
    <meta name="revisit" content="4 days" />
    <meta name="robots" content="all" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MotoNET">
    <meta name="author" content="MotoNET">



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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=adsense&amp;sensor=true&amp;language=es&amp;components=country:AR"></script>

</head>
<body class="landing-page">
<div class="navbar-wrapper" style="margin-bottom: 180px;">
    <nav class="navbar navbar-default navbar-fixed-top navbar-scroll" role="navigation">
        <div class="container">
            <div class="redes">
                <ul>
                    <li><a href="https://www.facebook.com/motonetonline" target="_blank" class="fa fa-facebook-square"></a></li>
                    <li><a href="https://twitter.com/motonetonline" target="_blank" class="fa fa-twitter-square"></a></li>
                    <li><a href="https://www.instagram.com/motonet_online" target="_blank" class="fa fa-instagram"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCspvxzlzG2oo_QAL8OQv0IA" target="_blank" class="fa fa-youtube-square"></a></li>
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


	@include('motonet/web/includes/menu')


@yield('content')

<footer class="footer-absolute-bottom">
    <p>&copy;Motonet -  Av. Ricardo balbin 486 - San Miguel - Buenos Aires - 0810-333-6686 </p>
</footer>


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



    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

    $('#myCarousel').find('.item').first().addClass('active');
    $('.navbar2').addClass("fixed-top");


    $('#menuCategories').on('shown.bs.dropdown',function(ev){
        var ul = $('.h300');
        ul.each(function(pos){
//                alert(parseInt($(this).css('height')));
            if(parseInt($(this).css('height')) == 300 ){
                $(this).parent().find('.verMas').css('display','block');
            }

        });
    });

</script>

@yield('js')



</body>
</html>
