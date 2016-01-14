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
                <p id="copyright">Copyright &copy; 2015 . TheFutbolCompany.com - Designed By  <a href="http://www.navcoder.net" target="_blank">Navcoder.net</a></p>
            </div>

        </div>
        <!-- wrapper -->

    </div>
    <!-- punica-footer-bottom -->

</footer>
<!-- punica-footer -->


<script src="assets/web/js/jquery-1.10.2.min.js"></script>
<script src="assets/web/js/retina.js"></script>
<script src="assets/web/js/bootstrap.min.js"></script>
<script src="assets/web/js/colorswitch.js"></script>


</body>

</html>
