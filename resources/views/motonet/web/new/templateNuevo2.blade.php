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

    <link rel="apple-touch-icon" sizes="57x57" href="assets/web/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/web/ico//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/web/ico//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/web/ico//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/web/ico//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/web/ico//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/web/ico//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/web/ico//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/web/ico//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/web/ico//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/web/ico//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/web/ico//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/web/ico//favicon-16x16.png">
    <link rel="manifest" href="assets/web/ico//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/web/ico//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    @yield('title')
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
    <link href="assets/css/chat.css" rel="stylesheet"/>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/unicase/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    @yield('css')
    <!-- Favicon
    <link rel="shortcut icon" href="assets/unicase/images/favicon.ico">
    -->

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/unicase/js/html5shiv.js"></script>
    <script src="assets/unicase/js/respond.min.js"></script>
    <![endif]-->
    <!-- Hotjar Tracking Code for http://www.motonet.com.ar -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:280240,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-81463000-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script src="assets/js/vue.js"></script>

</head>
<body class="cnt-home">
<header class="header-style-1">

    @include('motonet/web/new/topMenu')

    @include('motonet.web.new.index.mainHeader')

    @include('motonet/web/new/navBar')

</header>
@include('motonet.web.new.messages')


<div class="body-content outer-top-xs" id="top-banner-and-menu">

    <div class="container">
          @yield('promos')

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                @include('motonet.web.new.index.categorias')

            </div>

            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                @yield('sideContent')
            </div>

          </div>

        @yield('content')
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->


{{--<ul id="messages"></ul>--}}
{{--<form>--}}
    {{--<input id="m" autocomplete="off" /><button>Send</button>--}}
    {{--<input id='from' value="{{\Illuminate\Support\Facades\Session::get('_token')}}" type="hidden" >--}}
{{--</form>--}}


<!-- ============================================================= CHAT ============================================================= -->



 @include('motonet/web/new/chat');

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

//    $(window).bind("load", function() {
//        $('.show-theme-options').delay(1000).trigger('click');
//    });

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
<script src="assets/js/chat.js"></script>

@yield('js')
</body>
</html>