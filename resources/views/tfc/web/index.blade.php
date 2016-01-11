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

                                  {{--<a href="web/{!! $categoria->id !!}/principal"><img SRC="torn/btn1.png" WIDTH=200 HEIGHT=59 BORDER=0 hspace=0></a>--}}
                                  <a href="{{ route('principal',$categoria->id) }}" style="padding:3%"><img src="{{($categoria->images->count() != 0)?$categoria->images->first()->image : ''}}" width="150" height="59" border="0" hspace="0">
                                  </a>

                              @endforeach

                              {{--<IMG SRC="torn/btn2.png" WIDTH=200 HEIGHT=59 BORDER=0 hspace= 0>--}}
                              {{--<IMG SRC="torn/btn3.png" WIDTH=200 HEIGHT=59 BORDER=0 hspace= 0><br>--}}
                              {{--<IMG SRC="torn/btn4.png" WIDTH=200 HEIGHT=59 BORDER=0 hspace= 0>--}}
                              {{--<IMG SRC="torn/btn5.png" WIDTH=200 HEIGHT=59 BORDER=0 hspace= 0>--}}
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
