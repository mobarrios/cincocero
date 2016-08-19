<!DOCTYPE html>
<html lang="es">
<head>
    <base href="{!! asset('') !!}">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>MotoNET</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/unicase/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/unicase/css/main.css">
    <link rel="stylesheet" href="assets/unicase/css/blue.css">
    <link rel="stylesheet" href="assets/unicase/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/unicase/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/unicase/css/owl.theme.css">-->
    <link href="assets/unicase/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/unicase/css/animate.min.css">
    <link rel="stylesheet" href="assets/unicase/css/rateit.css">
    <link rel="stylesheet" href="assets/unicase/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/unicase/css/config.css">
    <link href="assets/unicase/css/blue.css" rel="alternate stylesheet" title="Blue color">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/unicase/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon
    <link rel="shortcut icon" href="assets/unicase/images/favicon.ico">
    -->

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/unicase/js/html5shiv.js"></script>
    <script src="assets/unicase/js/respond.min.js"></script>
    <![endif]-->


</head>
<body class="cnt-home">

<header class="header-style-1">

    @include('motonet/web/new/topMenu')

    @include('motonet/web/new/mainHeader')

    @include('motonet/web/new/navBar')

</header>


<div class="body-content outer-top-xs" id="top-banner-and-menu">

    <div class="container">

          @include('motonet/web/new/mainPromos')

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                @include('motonet/web/new/categorias')

            </div>

            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                @include('motonet/web/new/slider')
            </div>

          </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                @include('motonet/web/new/productosDestacados')
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                <div class="wide-banners wow fadeInUp outer-bottom-vs">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <div class="col-xs-12">
                                        <img class="img-responsive" data-echo="http://www.todopago.com.ar/sites/todopago.com.ar/files/kit_banner_promocional_908x515_3.jpg" src="assets/unicase/images/blank.gif" alt="">
                                    </div>
                                    <div class="col-xs-12">
                                        <img class="img-responsive" data-echo="https://imgmp.mlstatic.com/org-img/banners/ar/medios/575X40.jpg" src="assets/unicase/images/blank.gif" alt="">
                                    </div>
                                </div>
                                {{--<div class="strip">--}}
                                    {{--<div class="strip-inner">--}}
                                        {{--<h3 class="hidden-xs">samsung</h3>--}}
                                        {{--<h2>galaxy</h2>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div><!-- /.wide-banner -->
                            {{--<div class="col-md-12 mt-20">--}}
                                {{--<div class="wide-banner cnt-strip">--}}
                                    {{--<div class="image">--}}
                                        {{--<div class="wide-banner cnt-strip">--}}
                                            {{--<div class="image">--}}
                                                {{--<img class="img-responsive" data-echo="assets/unicase/images/banners/1.jpg" src="assets/unicase/images/banners/1.jpg" alt="">--}}
                                            {{--</div>--}}
                                            {{--<div class="strip">--}}
                                                {{--<div class="strip-inner">--}}
                                                    {{--<h3 class="hidden-xs">0810-333-6686</h3>--}}
                                                    {{--<h2>11-6383-4963</h2>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div><!-- /.wide-banner -->--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.wide-banner -->--}}
                            {{--</div><!-- /.col -->--}}


                        </div><!-- /.col -->



                        <div class="col-md-4">
                            <iframe id="iframeFace" scrolling="yes" frameborder="0" allowTransparency="true" class="center-block"></iframe>
                            <iframe class="mt-20 center-block" id="videoInstitucional" src="https://www.youtube.com/embed/phNNZIud0Zo" frameborder="0" allowfullscreen></iframe>
                        </div><!-- /.col -->
                    </div><!-- /.row -->


                </div><!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

                <!-- ============================================== BEST SELLER ============================================== -->

                @include('motonet/web/new/masVendidos')
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
               @include('motonet/web/new/nuestrosLocales')
                <!-- ============================================== BLOG SLIDER : END ============================================== -->


            </div><!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('motonet/web/new/nuestrasMarcas')
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->



<!-- ============================================================= FOOTER ============================================================= -->
@include('motonet/web/new/footer')
<!-- ============================================================= FOOTER : END============================================================= -->


<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="assets/unicase/js/jquery-1.11.1.min.js"></script>

<script src="assets/unicase/js/bootstrap.min.js"></script>

<script src="assets/unicase/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/unicase/js/owl.carousel.min.js"></script>

<script src="assets/unicase/js/echo.min.js"></script>
<script src="assets/unicase/js/jquery.easing-1.3.min.js"></script>
<script src="assets/unicase/js/bootstrap-slider.min.js"></script>
<script src="assets/unicase/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="assets/unicase/js/lightbox.min.js"></script>
<script src="assets/unicase/js/bootstrap-select.min.js"></script>
<script src="assets/unicase/js/wow.min.js"></script>
<script src="assets/unicase/js/scripts.js"></script>

<!-- For demo purposes – can be removed on production -->

<script src="switchstylesheet/switchstylesheet.js"></script>

<script>

    $(window).bind("load", function() {
        $('.show-theme-options').delay(2000).trigger('click');
    });

    var t;
    $(document).ready(function(){
        t = parseInt($("#videoInstitucional").width());

        $('#iframeFace').attr("src","https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmotonetonline&tabs=timeline%2Cmessages&width="+t+"&height=380&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=203933888898")
    });

//    window.onload(function(){
//        var t =
//       $("#videoInstitucional").css("width",)
//    });
</script>
<!-- For demo purposes – can be removed on production : End -->



</body>
</html>