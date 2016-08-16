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

    <title>Unicase</title>

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

    <link href="assets/unicase/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/unicase/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/unicase/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/unicase/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/unicase/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <!-- Demo Purpose Only. Should be removed in production : END -->


    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/unicase/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/unicase/images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/unicase/js/html5shiv.js"></script>
    <script src="assets/unicase/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                        <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li>
                        <li><a href="#"><i class="icon fa fa-sign-in"></i>Login</a></li>

                    </ul>
                </div><!-- /.cnt-account -->

                <div class="cnt-block">

                </div><!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder mt-n45">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="home.html">

                            <img src="assets/web/img/logo.png" alt="" width="250">

                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                    <div class="contact-row">
                        <div class="phone inline">
                            <i class="icon fa fa-phone"></i> 0810-333-6686
                        </div>
                        <div class="contact inline">
                            <i class="icon fa fa-envelope"></i> ventas@motonet.com.ar
                        </div>
                    </div><!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">

                                <ul class="categories-filter animate-dropdown">
                                </ul>

                                <input class="search-field" placeholder="Buscar Producto..." />

                                <a class="search-button" href="#" ></a>

                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="total-price-basket">
                                    <span class="lbl">tu compra -</span>
					<span class="total-price">
						<span class="sign">$</span>
						<span class="value">00.00</span>
					</span>
                                </div>
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count">0</span></div>

                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="detail.html"><img src="assets/unicase/images/cart.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

                                            <h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>

                                <div class="clearfix cart-total">
                                    <div class="pull-right">

                                        <span class="text">Sub Total :</span><span class='price'>$600.00</span>

                                    </div>
                                    <div class="clearfix"></div>

                                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div><!-- /.cart-total-->


                            </li>
                        </ul><!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">


                                <li class="dropdown active">
                                    <a href="contact.html"> Inicio</a>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Seguros</a>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html"> Accesorios
                                        <span class="menu-label hot-menu hidden-xs">hot</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html"> Servicio Técnico</a>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html"> Sucursales</a>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html"> Contactanos</a>
                                </li>


                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->


                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->

    </div><!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-vs">
            <div class="row">

                <div class="col-md-12">
                    <div class="wide-banner cnt-strip">
                        <div class="image">
                            <img class="img-responsive" data-echo="assets/unicase/images/banners/3.jpg" src="assets/unicase/images/blank.gif" alt="">
                        </div>
                        <div class="strip strip-text">
                            <div class="strip-inner">
                                <h1 class="text-right">20000000 coutas sin interes<br>
                                    <span class="shopping-needs">con todas las tarjetas</span></h1>
                            </div>
                        </div>
                        <div class="new-label">
                            <div class="text"></div>
                        </div><!-- /.new-label -->
                    </div><!-- /.wide-banner -->
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.wide-banners -->
        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categorias</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-motobike fa-fw"></i>Motos</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Lenovo</a></li>
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Fuhlen</a></li>
                                                    <li><a href="category.html">Longsleeves</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Polos</a></li>
                                                    <li><a href="category.html">Sweaters</a></li>
                                                    <li><a href="category.html">Shirts</a></li>
                                                    <li><a href="category.html">Hoodies</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-mobile fa-fw"></i>Scooters</a>
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt="" src="assets/unicase/images/banners/banner-side.png" /></a>
                                            </div>
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-apple fa-fw"></i>Custom</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Lenovo</a></li>
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Fuhlen</a></li>
                                                    <li><a href="category.html">Longsleeves</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Polos</a></li>
                                                    <li><a href="category.html">Sweaters</a></li>
                                                    <li><a href="category.html">Shirts</a></li>
                                                    <li><a href="category.html">Hoodies</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-camera fa-fw"></i>Ciclomotores</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Lenovo</a></li>
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Fuhlen</a></li>
                                                    <li><a href="category.html">Longsleeves</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Polos</a></li>
                                                    <li><a href="category.html">Sweaters</a></li>
                                                    <li><a href="category.html">Shirts</a></li>
                                                    <li><a href="category.html">Hoodies</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-headphones fa-fw"></i>Cuatriciclos</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Lenovo</a></li>
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Fuhlen</a></li>
                                                    <li><a href="category.html">Longsleeves</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Polos</a></li>
                                                    <li><a href="category.html">Sweaters</a></li>
                                                    <li><a href="category.html">Shirts</a></li>
                                                    <li><a href="category.html">Hoodies</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-gamepad fa-fw"></i>Generadores</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Lenovo</a></li>
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Fuhlen</a></li>
                                                    <li><a href="category.html">Longsleeves</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Polos</a></li>
                                                    <li><a href="category.html">Sweaters</a></li>
                                                    <li><a href="category.html">Shirts</a></li>
                                                    <li><a href="category.html">Hoodies</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-location-arrow fa-fw"></i>Motobombas</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Lenovo</a></li>
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Fuhlen</a></li>
                                                    <li><a href="category.html">Longsleeves</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Polos</a></li>
                                                    <li><a href="category.html">Sweaters</a></li>
                                                    <li><a href="category.html">Shirts</a></li>
                                                    <li><a href="category.html">Hoodies</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-history fa-fw"></i>Bosque y Jardin</a>
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt="" src="assets/unicase/images/banners/banner-side.png" /></a>
                                            </div>
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-microphone fa-fw"></i>Accessories</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Lenovo</a></li>
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Fuhlen</a></li>
                                                    <li><a href="category.html">Longsleeves</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Polos</a></li>
                                                    <li><a href="category.html">Sweaters</a></li>
                                                    <li><a href="category.html">Shirts</a></li>
                                                    <li><a href="category.html">Hoodies</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="category.html">Microsoft</a></li>
                                                    <li><a href="category.html">Apple</a></li>
                                                    <li><a href="category.html">Tees & Tanks</a></li>
                                                    <li><a href="category.html">Graphic Tees</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
                <!-- ============================================== SPECIAL OFFER ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Offer</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Simple Product</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm3.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Camera X30</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Simple Product</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                        <div class="tag tag-micro sale">
                                                            <span>sale</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm3.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Camera X30</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Simple Product</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm3.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Camera X30</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class="sidebar-widget product-tag wow fadeInUp">
                    <h3 class="section-title">Product tags</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="tag-list">
                            <a class="item" title="Phone" href="category.html">Phone</a>
                            <a class="item active" title="Vest" href="category.html">Vest</a>
                            <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                            <a class="item" title="Furniture" href="category.html">Furniture</a>
                            <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                            <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                            <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                            <a class="item" title="Toys" href="category.html">Toys</a>
                            <a class="item" title="Rose" href="category.html">Rose</a>
                        </div><!-- /.tag-list -->
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Deals</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm4.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm4.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Simple Product</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm5.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm5.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Simple Product</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm6.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm6.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Camera X30</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                        <div class="tag tag-micro sale">
                                                            <span>sale</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm3.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm5.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm5.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/sm1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->
                <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
                    <h3 class="section-title">Newsletters</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <p>Sign Up for Our Newsletter!</p>
                        <form role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                            </div>
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->
                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="sidebar-widget hot-deals wow fadeInUp">
                    <h3 class="section-title">hot deals</h3>
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">

                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/unicase/images/hot-deals/1.jpg" alt="">
                                    </div>
                                    <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">Days</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="hour box">
                                                <span class="key">20</span>
                                                <span class="value">HRS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="minutes box">
                                                <span class="key">36</span>
                                                <span class="value">MINS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box">
                                                <span class="key">60</span>
                                                <span class="value">SEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB Gold</a></h3>
                                    <div class="rating rateit-small"></div>

                                    <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                        <span class="price-before-discount">$800.00</span>

                                    </div><!-- /.product-price -->

                                </div><!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">

                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </div>

                                    </div><!-- /.action -->
                                </div><!-- /.cart -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/unicase/images/hot-deals/2.jpg" alt="">
                                    </div>
                                    <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">Days</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="hour box">
                                                <span class="key">20</span>
                                                <span class="value">HRS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="minutes box">
                                                <span class="key">36</span>
                                                <span class="value">MINS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box">
                                                <span class="key">60</span>
                                                <span class="value">SEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB Gold</a></h3>
                                    <div class="rating rateit-small"></div>

                                    <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                        <span class="price-before-discount">$800.00</span>

                                    </div><!-- /.product-price -->

                                </div><!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">

                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </div>

                                    </div><!-- /.action -->
                                </div><!-- /.cart -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/unicase/images/hot-deals/3.jpg" alt="">
                                    </div>
                                    <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">Days</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="hour box">
                                                <span class="key">20</span>
                                                <span class="value">HRS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="minutes box">
                                                <span class="key">36</span>
                                                <span class="value">MINS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box">
                                                <span class="key">60</span>
                                                <span class="value">SEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB Gold</a></h3>
                                    <div class="rating rateit-small"></div>

                                    <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                        <span class="price-before-discount">$800.00</span>

                                    </div><!-- /.product-price -->

                                </div><!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">

                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </div>

                                    </div><!-- /.action -->
                                </div><!-- /.cart -->
                            </div>
                        </div>


                    </div><!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->
                <!-- ============================================== COLOR============================================== -->
                <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                    <div id="advertisement" class="advertisement">
                        <div class="item bg-color">
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text">
                                        Save<span class="big">50%</span>
                                    </div>


                                    <div class="excerpt">
                                        on selected items
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                        <div class="item" style="background-image: url('assets/unicase/images/advertisement/1.jpg');">

                        </div><!-- /.item -->

                        <div class="item bg-color">
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text">
                                        Save<span class="big">50%</span>
                                    </div>


                                    <div class="excerpt fadeInDown-2">
                                        on selected items
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                    </div><!-- /.owl-carousel -->
                </div>

                <!-- ============================================== COLOR: END ============================================== -->


            </div><!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="item" style="background-image: url(assets/unicase/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        The new <span class="highlight">imac</span> for you
                                    </div>

                                    <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>21.5-Inch Now Starting At $1099 </span>
                                        <span>27-Inch Starting At $1799</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                        <div class="item" style="background-image: url(assets/unicase/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        The new <span class="highlight">imac</span> for you
                                    </div>

                                    <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>21.5-Inch Now Starting At $1099 </span>
                                        <span>27-Inch Starting At $1799</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->



                    </div><!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->

                <!-- ============================================== INFO BOXES ============================================== -->
                <div class="info-boxes wow fadeInUp">
                    <div class="info-boxes-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <i class="icon fa fa-dollar"></i>
                                        </div>
                                        <div class="col-xs-10">
                                            <h4 class="info-box-heading green">money back</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">30 Day Money Back Guarantee.</h6>
                                </div>
                            </div><!-- .col -->

                            <div class="hidden-md col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <i class="icon fa fa-truck"></i>
                                        </div>
                                        <div class="col-xs-10">
                                            <h4 class="info-box-heading orange">free shipping</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">free ship-on oder over $600.00</h6>
                                </div>
                            </div><!-- .col -->

                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <i class="icon fa fa-gift"></i>
                                        </div>
                                        <div class="col-xs-10">
                                            <h4 class="info-box-heading red">Special Sale</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">All items-sale up to 20% off </h6>
                                </div>
                            </div><!-- .col -->
                        </div><!-- /.row -->
                    </div><!-- /.info-boxes-inner -->

                </div><!-- /.info-boxes -->
                <!-- ============================================== INFO BOXES : END ============================================== -->
                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">New Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                            <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">smartphone</a></li>
                            <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">laptop</a></li>
                            <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">apple</a></li>
                        </ul><!-- /.nav-tabs -->
                    </div>

                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/4.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">LG Smart Phone LP68</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/3.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/1.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/6.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Nokia Lumia 520</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div><!-- /.tab-pane -->

                        <div class="tab-pane" id="smartphone">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/3.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/4.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">LG Smart Phone LP68</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/6.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Nokia Lumia 520</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/1.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div><!-- /.tab-pane -->

                        <div class="tab-pane" id="laptop">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/6.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Nokia Lumia 520</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/4.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">LG Smart Phone LP68</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/1.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/3.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div><!-- /.tab-pane -->

                        <div class="tab-pane" id="apple">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/3.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/1.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/4.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">LG Smart Phone LP68</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/6.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Nokia Lumia 520</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                                    </div><!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div><!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div><!-- /.product-price -->

                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->

                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div><!-- /.tab-pane -->

                    </div><!-- /.tab-content -->
                </div><!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-vs">
                    <div class="row">

                        <div class="col-md-7">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" data-echo="assets/unicase/images/banners/1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                </div>
                                <div class="strip">
                                    <div class="strip-inner">
                                        <h3 class="hidden-xs">samsung</h3>
                                        <h2>galaxy</h2>
                                    </div>
                                </div>
                            </div><!-- /.wide-banner -->
                        </div><!-- /.col -->

                        <div class="col-md-5">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" data-echo="assets/unicase/images/banners/2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                </div>
                                <div class="strip">
                                    <div class="strip-inner">
                                        <h3 class="hidden-xs">new trend</h3>
                                        <h2>watch phone</h2>
                                    </div>
                                </div>
                            </div><!-- /.wide-banner -->
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Featured products</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/1.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/3.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/6.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Nokia Lumia 520</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/4.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">LG Smart Phone LP68</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

                <!-- ============================================== BEST SELLER ============================================== -->

                <div class="sidebar-widget wow fadeInUp outer-bottom-vs">
                    <h3 class="section-title">Best seller</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s1.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                        <div class="tag tag-micro sale">
                                                            <span>sale</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s3.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s3.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					$650.99				</span>

                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
                <section class="section outer-bottom-vs wow fadeInUp">
                    <h3 class="section-title">latest form blog</h3>
                    <div class="blog-slider-container outer-top-xs">
                        <div class="owl-carousel blog-slider custom-carousel">

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image">
                                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/1.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                                        </div>
                                    </div><!-- /.blog-post-image -->


                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div><!-- /.blog-post-info -->


                                </div><!-- /.blog-post -->
                            </div><!-- /.item -->


                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image">
                                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/2.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                                        </div>
                                    </div><!-- /.blog-post-image -->


                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div><!-- /.blog-post-info -->


                                </div><!-- /.blog-post -->
                            </div><!-- /.item -->


                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image">
                                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/3.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                                        </div>
                                    </div><!-- /.blog-post-image -->


                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div><!-- /.blog-post-info -->


                                </div><!-- /.blog-post -->
                            </div><!-- /.item -->


                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image">
                                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/4.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                                        </div>
                                    </div><!-- /.blog-post-image -->


                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div><!-- /.blog-post-info -->


                                </div><!-- /.blog-post -->
                            </div><!-- /.item -->


                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image">
                                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/5.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                                        </div>
                                    </div><!-- /.blog-post-image -->


                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div><!-- /.blog-post-info -->


                                </div><!-- /.blog-post -->
                            </div><!-- /.item -->


                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image">
                                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/6.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                                        </div>
                                    </div><!-- /.blog-post-image -->


                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div><!-- /.blog-post-info -->


                                </div><!-- /.blog-post -->
                            </div><!-- /.item -->


                        </div><!-- /.owl-carousel -->
                    </div><!-- /.blog-slider-container -->
                </section><!-- /.section -->
                <!-- ============================================== BLOG SLIDER : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section wow fadeInUp">
                    <h3 class="section-title">New Arrivals</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/6.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Nokia Lumia 520</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/2.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/1.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/4.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">LG Smart Phone LP68</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/unicase/images/blank.gif" data-echo="assets/unicase/images/products/3.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

            </div><!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <h3 class="section-title">Our Brands</h3>
            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand1.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand2.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand3.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand4.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand5.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand6.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand2.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand4.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand1.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/unicase/images/brands/brand5.png" src="assets/unicase/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->




<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
    <div class="links-social inner-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- ============================================================= CONTACT INFO ============================================================= -->
                    <div class="contact-info">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="home.html">

                                    <img src="assets/unicase/images/logo.png" alt="">

                                </a>
                            </div><!-- /.logo -->

                        </div><!-- /.footer-logo -->

                        <div class="module-body m-t-20">
                            <p class="about-us"> Nam libero tempore, cum soluta nobis est ses  eligendi optio cumque cum soluta nobis est ses  eligendi optio cumque.</p>


                        </div><!-- /.module-body -->

                    </div><!-- /.contact-info -->
                    <!-- ============================================================= CONTACT INFO : END ============================================================= -->            	</div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- ============================================================= CONTACT TIMING============================================================= -->
                    <div class="contact-timing">
                        <div class="module-heading">
                            <h4 class="module-title">opening time</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body outer-top-xs">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr><td>Monday-Friday:</td><td class="pull-right">08.00 To 18.00</td></tr>
                                    <tr><td>Saturday:</td><td class="pull-right">09.00 To 20.00</td></tr>
                                    <tr><td>Sunday:</td><td class="pull-right">10.00 To 20.00</td></tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                            <p class='contact-number'>Hot Line:(400)888 868 848</p>
                        </div><!-- /.module-body -->
                    </div><!-- /.contact-timing -->
                    <!-- ============================================================= CONTACT TIMING : END ============================================================= -->            	</div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- ============================================================= LATEST TWEET============================================================= -->
                    <div class="latest-tweet">
                        <div class="module-heading">
                            <h4 class="module-title">latest tweet</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body outer-top-xs">
                            <div class="re-twitter">
                                <div class="comment media">
                                    <div class='pull-left'>
                    <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">@laurakalbag</a> As a result of your previous recommendation :)
                    <span class="time">
                        12 hours ago
                    </span>
                                    </div>
                                </div>

                            </div>
                            <div class="re-twitter">
                                <div class="comment media">
                                    <div class='pull-left'>
                    <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">@laurakalbag</a> As a result of your previous recommendation :)
                    <span class="time">
                        12 hours ago
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.module-body -->
                    </div><!-- /.contact-timing -->
                    <!-- ============================================================= LATEST TWEET : END ============================================================= -->            	</div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- ============================================================= INFORMATION============================================================= -->
                    <div class="contact-information">
                        <div class="module-heading">
                            <h4 class="module-title">information</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body outer-top-xs">
                            <ul class="toggle-footer" style="">
                                <li class="media">
                                    <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                                    </div>
                                    <div class="media-body">
                                        <p>868 Any Stress,Burala Casi,Picasa USA.</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                                    </div>
                                    <div class="media-body">
                                        <p>(400) 0888 888 888<br>(400) 888 888 888</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                                    </div>
                                    <div class="media-body">
                                        <span><a href="#">Contact @Unicase.com</a></span><br>
                                        <span><a href="#">Sale @Unicase.com</a></span>
                                    </div>
                                </li>

                            </ul>
                        </div><!-- /.module-body -->
                    </div><!-- /.contact-timing -->
                    <!-- ============================================================= INFORMATION : END ============================================================= -->            	</div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.links-social -->

    <div class="footer-bottom inner-bottom-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading outer-bottom-xs">
                        <h4 class="module-title">category</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Libero Sed rhoncus</a></li>
                            <li><a href="#">Venenatis augue tellus</a></li>
                            <li><a href="#">My Vouchers</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading outer-bottom-xs">
                        <h4 class="module-title">my account</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Search Terms</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading outer-bottom-xs">
                        <h4 class="module-title">our services</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Libero Sed rhoncus</a></li>
                            <li><a href="#">Venenatis augue tellus</a></li>
                            <li><a href="#">My Vouchers</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading outer-bottom-xs">
                        <h4 class="module-title">help & support</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li><a href="#">Knowledgebase</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Contact Support</a></li>
                            <li><a href="#">Marketplace Blog</a></li>
                            <li><a href="#">About Unicase</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="copyright">
                    Copyright © 2014
                    <a href="home.html">Unicase Shop.</a>
                    - All rights Reserved
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="assets/unicase/images/payments/1.png" alt=""></li>
                        <li><img src="assets/unicase/images/payments/2.png" alt=""></li>
                        <li><img src="assets/unicase/images/payments/3.png" alt=""></li>
                        <li><img src="assets/unicase/images/payments/4.png" alt=""></li>
                        <li><img src="assets/unicase/images/payments/5.png" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
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
</script>
<!-- For demo purposes – can be removed on production : End -->



</body>
</html>