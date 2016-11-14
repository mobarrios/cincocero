<!DOCTYPE html>
<html lang="en-gb" class="uk-height-1-1">

<head>
    <base href="{!! asset('assets/web/new/asd') !!}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Futbol Company. Profesionales en Futbol Amateurs.</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="css/donate.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>

<body class="uk-height-1-1 uk-vertical-align uk-text-center tt-offline">
    <div class="offline-logo">
        <div class="wrap"><img src="images/logo-white.png" alt="The Futbol Company" title="logo"></div>
    </div>
    <div class="uk-panel uk-width-1-1 uk-panel-box uk-vertical-align-middle message-offline uk-container-center">
        <div id="system-message-container"></div>
        <p>Seleccione <span class="mes-color">su Torneo</span></p><br>

        @foreach($categories as $categoria)
            <a href="{{ route('new.noticias',$categoria->id) }}"><img class="img-responsive" src="../../../{{($categoria->images->count() != 0)?$categoria->images->first()->image : ''}}" width="10%">
            </a>

        @endforeach

        {{--<a href="noticia.html"><img class="img-responsive" src="images/1457701933.png" alt="The Futbol Company" title="logo" width="10%"></a>--}}
        {{--<a href="noticia.html"><img class="img-responsive" src="images/1457701973.png" alt="The Futbol Company" title="logo" width="10%"></a>--}}

        <br><br>
    </div>
    
    <div class="offline-socials">
        <div class="footer-socials">
            <div class="social-top">
                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
            </div>
        </div>
    </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/SimpleCounter.js"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/components/accordion.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
</body>


</html>