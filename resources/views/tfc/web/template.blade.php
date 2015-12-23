<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The Futbol Company. Profesionales en Futbol Amaterus.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{asset('assets/web/web')}}"/>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" />
    <link rel="stylesheet" href="css/font-awesome.css" media="all" />
    <link rel="stylesheet" href="css/superfish.css" media="all" />
    <link rel="stylesheet" href="css/owl.carousel.css" media="all" />
    <link rel="stylesheet" href="css/owl.theme.css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" media="all" />
    <link rel="stylesheet" href="css/colorbox.css" media="all" />
    <link rel="stylesheet" href="css/color-options.css" media="all" />
    <link rel="stylesheet" href="css_mas/style.css">
    <link rel="stylesheet" href="style.css">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/modernizr.custom.js"></script>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="all" />
    <![endif]-->

    <!-- Style -->
    <link rel="stylesheet" href="css/skin/black.css" type="text/css" id="colors" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600' rel='stylesheet' type='text/css'>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="punica-header-3 punica-footer-3 punica-home-1">



<div class="punica-header"><!-- punica-header-top --><!-- punica-header-middle -->

    <div class="punica-header-bottom">

        <div class="wrapper clearfix">

            @include('tfc/web/menu/menuTemplate')
            <!-- main-nav -->


            <!--search-box-->

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
                    <li class="current-menu-item">
                        <a href="principal.html"><img src="torn/btn1.png" width="200" height="59" alt=""/></a></li>
                    <li>
                        <a href="#"><img src="torn/btn2.png" width="200" height="59" alt=""/></a></li>
                    <li>
                        <a href="#"><img src="torn/btn3.png" width="200" height="59" alt=""/></a></li>
                    <li>
                        <a href="#"><img src="torn/btn4.png" width="200" height="59" alt=""/></a> </li>
                    <li><a href="#"><img src="torn/btn5.png" width="200" height="59" alt=""/></a></li>

                </ul>
                <!-- main-menu -->

                <i class='fa fa-align-justify'></i>

                <div class="mobile-menu-wrapper">
                    <ul id="mobile-menu">
                        <li><a href="#"><img src="torn/btn1.png" width="200" height="59" alt=""/></a></li>
                        <li><a href="#"><img src="torn/btn2.png" width="200" height="59" alt=""/></a></li>
                        <li><a href="#"><img src="torn/btn3.png" width="200" height="59" alt=""/></a></li>
                        <li><a href="#"><img src="torn/btn4.png" width="200" height="59" alt=""/></a></li>
                        <li><a href="#"><img src="torn/btn5.png" width="200" height="59" alt=""/></a></li>

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

        {{--<div class="center-col">--}}

            {{--<center>--}}
                {{--<div class="breadcrumb clearfix">inscripcion online<span class="bottom-line"></span>--}}
                {{--</div></center>--}}
            <!-- breadcrumb -->

            {{--<div class="elements-box">--}}

                @yield('content')

                {{--<p>&nbsp;</p>--}}
                {{--<center><!-- row --></center>--}}
                <!-- row --><!-- row --><!-- row -->

                {{--<div class="row"></div>--}}
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            {{--</div>--}}
            <!-- elements-box -->

        {{--</div>--}}
        <!-- center-col -->

        <div class="sidebar right-sidebar widget-area-5">

            <div class="widget widget_nav_menu">
                <h2 class="widget-title">MENU</h2>
                <div class="menu-all-pages-container">
                    <ul class="menu" id="menu-all-pages">
                        </span>
                        <br><br><br>
                        </span>
                    </ul>
                </div>
            </div>
            <!-- widget_nav_menu --><!-- punica-socials-link-widget --><!-- widget --><!-- punica-news-letter-widget --><!-- punica-adv-widget --><!-- punica-twitter-widget --><!-- punica-poll-widget -->

        </div>
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


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/retina.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/colorswitch.js"></script>
<script src="js/custom.js" charset="utf-8"></script>

</body>

</html>
