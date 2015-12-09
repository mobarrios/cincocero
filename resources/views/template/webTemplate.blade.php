<!DOCTYPE HTML>
<html>
<head>
    <base href="{{asset('')}}">
    <title>AHGAI - Asociación Hotelera, Gastronómica y Afines de Iguazú.</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="web/css/bootstrap.css">
    <link rel="stylesheet" href="web/css/font-awesome.css">
    <link rel="stylesheet" href="web/css/icomoon.css">
    <link rel="stylesheet" href="web/css/styles.css">
    <link rel="stylesheet" href="web/css/mystyles.css">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <script src="web/js/modernizr.js"></script>
    <style type="text/css">
        .owl-cap-title
        {
            font-size: 30px;
        }
    </style>



</head>

<body>

<div class="global-wrap">

    <div>
        @include('ahgai.web.header')
    </div>

    @yield('slide')

    <div class="container">
        @yield('content')
        <div class="gap"></div>

    </div>

    @yield('pre-footer')

    <div class="gap gap-small"></div>


</div>



<div>
    @include('ahgai.web.footer')

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>

</div>

<script src="web/js/jquery.js"></script>
<script src="web/js/bootstrap.js"></script>
<script src="web/js/slimmenu.js"></script>
<script src="web/js/bootstrap-datepicker.js"></script>
<script src="web/js/bootstrap-timepicker.js"></script>
<script src="web/js/nicescroll.js"></script>
<script src="web/js/dropit.js"></script>
<script src="web/js/ionrangeslider.js"></script>
<script src="web/js/icheck.js"></script>
<script src="web/js/fotorama.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="web/js/typeahead.js"></script>
<script src="web/js/card-payment.js"></script>
<script src="web/js/magnific.js"></script>
<script src="web/js/owl-carousel.js"></script>
<script src="web/js/fitvids.js"></script>
<script src="web/js/tweet.js"></script>
<script src="web/js/countdown.js"></script>
<script src="web/js/gridrotator.js"></script>
<script src="web/js/custom.js"></script>

<script src="web/js/parallax.js"></script>


</body>



</html>
