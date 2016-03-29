<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Motonet
    </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="assets/inspinia/css/animate.css" rel="stylesheet">
    <link href="assets/inspinia/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
	
	<!-- Finder -->
    <link href="assets/css/finder.css" rel="stylesheet">
	
	
	<!-- Mainly scripts -->
	<script src="assets/inspinia/js/jquery-2.1.1.js"></script>
	<script src="assets/inspinia/js/bootstrap.min.js"></script>
	<script src="assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="assets/inspinia/js/inspinia.js"></script>
	<script src="assets/inspinia/js/plugins/pace/pace.min.js"></script>
	<script src="assets/inspinia/js/plugins/wow/wow.min.js"></script>
	<script src="assets/js/finder.js"></script>
</head>
<body class="landing-page">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll col-xs-pull-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('index')}}"><img src="assets/web/img/logo.jpg" alt="motonet" width="100px" class="img-responsive"></a>
            </div>
            <div class="redes">
                <ul>
                    <li><a href="#" target="_blank" class="fa fa-facebook-square"></a></li>
                    <li><a href="#" target="_blank" class="fa fa-twitter-square"></a></li>
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
<div class="row m-t-155">
	<div class="container-fluid">
		<div class="buscador">
			<form action="" method="get" id="finder" class="center-block">
				 <div class="input-group-addon"><i class="fa fa-search"></i></div>
				 <input type="text" name="find" placeholder="Buscar"/>
				 <select name="categoria" id="categoria">
				 	<option value="0">Categoria</option>
				 	<option value="1">Categoria 1</option>
				 	<option value="2">Categoria 2</option>
				 	<option value="3">Categoria 3</option>
				 	<option value="4">Categoria 4</option>
				 	<option value="5">Categoria 5</option>
				 </select>
				 <select name="producto" id="producto" >
				 	<option value="0">Producto</option>
				 	<option value="1">Producto 1</option>
				 	<option value="2">Producto 2</option>
				 	<option value="3">Producto 3</option>
				 	<option value="4">Producto 4</option>
					<option value="5">Producto 5</option>
				 </select>
				 <select name="marca" id="marca">
				 	<option value="0">Marca</option>
				 	<option value="1">Marca 1</option>
				 	<option value="2">Marca 2</option>
				 	<option value="3">Marca 3</option>
				 	<option value="4">Marca 4</option>
					<option value="5">Marca 5</option>
				 </select>
				 <select name="modelo" id="modelo">
				 	<option value="0">Modelo</option>
				 	<option value="1">Modelo 1</option>
				 	<option value="2">Modelo 2</option>
				 	<option value="3">Modelo 3</option>
				 	<option value="4">Modelo 4</option>
					<option value="5">Modelo 5</option>
				 </select>
			</form>
		
		
		</div>
	</div>
</div>

<div id="inSlider" class="carousel carousel-fade hidden-xs" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Rouser<br/>
                        50% off</h1>
                    <p>Robustes y elegancia para ciudad.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">VER</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="assets/web/img/rouser.png" class="img-responsive" alt="laptop"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Honda CBR<br/>
                        Calidad y excelencia</h1>
                    <p>Promo CBR250 hasta el 31/3.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">VER</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="assets/web/img/cbr.jpg" class="img-responsive" alt="cbr"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="arrows fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="arrows fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section id="destacados" class="gray-section contact">
    <div class="container">
        <h1>Destacados</h1>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/cuatri.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/moto.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/cuatri.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/moto.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/cuatri.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/moto.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/cuatri.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="assets/web/img/moto.png" alt="foto">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                        <small class="text-muted">Categoría</small>
                        <a href="#" class="product-name"> Producto</a>

                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>
