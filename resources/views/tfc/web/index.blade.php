<!DOCTYPE html>
<html>
    <head>
        <title>The Futbol Company. Profesionales en Futbol Amaterus.</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <base href="{{asset('')}}"/>
        <meta charset="utf-8">
        {{--<meta name="author" content="Roman Kirichik">--}}
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href={{asset('images/favicon.png')}}>
        <link rel="apple-touch-icon" href="assets/web/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/web/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/web/images/apple-touch-icon-114x114.png">
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/web/css_mas/bootstrap.min.css">
        <link rel="stylesheet" href="assets/web/css_mas/style.css">
        <link rel="stylesheet" href="assets/web/css_mas/style-responsive.css">
        <link rel="stylesheet" href="assets/web/css_mas/animate.min.css">
        <link rel="stylesheet" href="assets/web/css_mas/vertical-rhythm.min.css">
        <link rel="stylesheet" href="assets/web/css_mas/owl.carousel.css">
        <link rel="stylesheet" href="assets/web/css_mas/magnific-popup.css">

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
        <link rel="manifest" href="manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader"></div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Home section -->
            <section class="home-section bg-dark-alfa-30 parallax-2" data-background="assets/web/images/full-width-images/section-bg-1.jpg" id="home">
                <div class="js-height-full">
                    
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                          <div align="center">
                              @foreach($categories as $categoria)
                                  <a href="{{ route('principal',$categoria->id) }}"><img src="{{($categoria->images->count() != 0)?$categoria->images->first()->image : ''}}" width="215" height="63" border="0" hspace="0">
                                  </a>

                              @endforeach
                          </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </section>
            <!-- End Home section -->

            @include('tfc/web/menu/menuIndex')

        </div>
        <!-- End Page Wrap -->
        
        <!-- JS -->
        <script type="text/javascript" src="assets/web/js_mas/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/SmoothScroll.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.countTo.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.appear.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.sticky.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.fitvids.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script type="text/javascript" src="assets/web/js_mas/gmap3.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/wow.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/all.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/contact-form.js"></script>
        <script type="text/javascript" src="assets/web/js_mas/jquery.ajaxchimp.min.js"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="assets/web/js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
