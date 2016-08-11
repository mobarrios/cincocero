<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <base href="{{'assets/landing/'}}">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/grid.css">

    <link rel="stylesheet" href="css/menu.css">

    @yield('css')
</head>
<body id="page-top" class="landing-page">

@include('soffem/web/navbar')

@yield('slider')

<div style="margin-top: 0px;" class="gray-section text-center">
    <img src="img/LogoHurlingham.png">
</div>
<br>

@yield('content')

<div class="container">
    <div class="row">
        <div class="col-xs-2">
            <img class="img-thumbnail" src="img/jack.jpg">
        </div>
        <div class="col-xs-2">
            <img class="img-thumbnail" src="img/corsini.jpg">
        </div>
        <div class="col-xs-2">
            <img class="img-thumbnail" src="img/jack.jpg">
        </div>
        <div class="col-xs-2">
            <img class="img-thumbnail" src="img/corsini.jpg">
        </div>
        <div class="col-xs-2">
            <img class="img-thumbnail" src="img/jack.jpg">
        </div>
        <div class="col-xs-2">
            <img class="img-thumbnail" src="img/corsini.jpg">
        </div>
    </div>
</div>


<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="text-black">Contacto</h1>
                <p>Contactate con nosotros para más información.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Mandanos un mail</a>
                <p class="m-t-sm">
                    O seguinos en las redes
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">--}}
                {{--<p><strong>&copy; 2016</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</section>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>

<script>


    // Activate WOW.js plugin for animation on scrol
    new WOW().init();







</script>

@yield('js')

<script src="js/grid.js"></script>


</body>
</html>
