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

    <base href="{!! asset('') !!}">
    <!-- Bootstrap core CSS -->
    <link href="assets/inspinia/css/bootstrap.css" rel="stylesheet">

    <link href="assets/inspinia/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fontello.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="assets/inspinia/css/animate.css" rel="stylesheet">
    <!-- Finder -->
    <link href="assets/css/finder.css" rel="stylesheet">

    <!-- Menu -->
    <link href="assets/css/menu.css" rel="stylesheet">

    @yield('css')

    <style>
        /*#iframeFace html > body > div._li > div#u_0_0 > div > div._2p3a{*/
            /*width:100% !important;*/
        /*}*/

        #iframeFace{
            width:100%;
            min-height:500px;
            border:none;
            overflow:hidden;
        }

        #iframeFace *{
            margin:auto;
            text-align:center;
        }

    </style>
            <!-- Mainly scripts -->
    <script src="assets/inspinia/js/jquery-2.1.1.js"></script>
    <script src="assets/angle/js/bootstrap.js"></script>
    <script src="assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/inspinia/js/inspinia.js"></script>
    <script src="assets/inspinia/js/plugins/pace/pace.min.js"></script>
    <script src="assets/inspinia/js/plugins/wow/wow.min.js"></script>
    <script src="assets/js/finder.js"></script>

    <link href="assets/inspinia/css/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/slick/slick-theme.css" rel="stylesheet">


</head>
<body class="landing-page">
<div class="navbar-wrapper">
    <div class="marca">
        <a class="navbar-brand" href="{{route('index')}}"><img src="assets/web/img/logo-blanco.png" alt="motonet" width="300px" class="img-responsive"></a>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="redes">
                <ul>
                    <li><a href="https://www.facebook.com/motonetonline" target="_blank" class="fa fa-facebook-square"></a></li>
                    <li><a href="https://twitter.com/motonetonline" target="_blank" class="fa fa-twitter-square"></a></li>
                    <li><a href="https://www.instagram.com/motonet_online" target="_blank" class="fa fa-instagram"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCspvxzlzG2oo_QAL8OQv0IA" target="_blank" class="fa fa-youtube-square"></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>ENCONTRÁ MÁS<br>
                        DE 1000 PRODUCTOS<br>
                        EN NUESTRA WEB<br>
                    </h1>
                    <p>Motos, cuatriciclos, generadores y accesorios.</p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one" style="background: url('assets/web/img/fondo1.jpg') center bottom"></div>

        </div>
    </div>
</div>


    @include('motonet/web/includes/menu')
    @if(\App\Entities\motonet\Sliders::count() > 0)
        @include('motonet/web/includes/slider')
    @endif

    <section  class="gray-section contact">
        <div class="container" >
            @include('motonet/web/index/brands')
        </div>
    </section>


    <section id="destacados" class="gray-section contact">

        <div class="container" style="background-color: white ;">
                <h2>Productos Destacados</h2>
                <hr>
                @foreach($publications as $publication)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="ibox-title">

                                    <img class="thumbnail img-rounded img-responsive" src="{{$publication->Models->Brands->Images->first()->image }}" width="60" height="60">

                                </div>
                                <div class="product-imitation">

                                        @if($publication->destacado_text != "")

                                            @if(strlen($publication->destacado_text) <= 10 )
                                            <div>
                                                <span>{{$publication->destacado_text}}</span>
                                            </div>
                                            @else
                                            <div class="line-height:4 px">
                                                <span style="font-size: 55%">{{$publication->destacado_text}}</span>
                                            </div>
                                            @endif

                                        @endif

                                    <img src="{{$publication->Models->Images->first()->image}}  " alt="foto">
                                </div>

                                <div class="product-desc">
                                        <span class="product-price">
                                            ${{$publication->price}}
                                        </span>
                                    <small class="text-muted">{{$publication->Models->name}}</small>
                                    <h2 class="product-name"> {{$publication->title}}</h2>

                                    <div class="m-t text-righ">
                                        <a href="{!! route('productDetail',$publication->id )!!}" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                                    </div>
                                </div>

                                @if($publication->promo != "")
                                    <div class="p-md pb-5 pt-0">
                                @else
                                     <div class="p-md pt-0">
                                @endif

                                @if($publication->salable == 1 && $publication->payMethod->count() > 0)
                                        <hr class="m-t-none">
                                    <h4><span class="fa fa-credit-card"></span> Medios de pago</h4>

                                    @foreach($publication->payMethod as $pagos)
                                        <div class="small text-muted">
                                            {{--<label class="label label-info mr-5">--}}
                                            <i class="fa fa-check child-info"></i>
                                            {{--</label>--}}
                                            {!! $pagos->method !!}  ( ${!! $publication->price + ($publication->price * $pagos->porcent) /100 !!}
                                            @if($pagos->coutas != "")
                                                - {!! $pagos->modality !!} de ${!! round((intval($publication->price + ($publication->price * $pagos->porcent) /100)  / $pagos->coutas),2,PHP_ROUND_HALF_UP) !!}
                                            @endif
                                            )
                                        </div>
                                    @endforeach
                                @endif

                                @if($publication->promo != "")
                                    <hr class="m-t-sm m-b-none p-b-none">
                                    <h2 class="product-name child-success pt-5"> {{$publication->promo}}</h2>
                                @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>

    </section>

<section  class="gray-section contact">
    <div class="container">
        <div class="col-xs-12 col-md-7 pb20" style="background-color: white;">
            @include('motonet/web/index/metodosDePagos')
        </div>
        <div class="col-xs-12 col-sm-5 tel2">
            <div class="iboxFace ibox col-xs-12 col-sm-3 col-md-12">
                <div class="ibox-title">
                    <h5>Soporte</h5>
                </div>
                <div class="ibox-content text-center">
                    <h3><i class="fa fa-phone"></i> 0810-333-6686 </h3>
                    <h3><i class="fa fa-whatsapp"></i> 11-6383-4963 </h3>
                    {{--<span class="small">--}}
                    {{--Si algo no salió bien, podes contactarnos.--}}
                    {{--</span>--}}
                </div>
            </div>
            <div class="iboxFace ibox col-xs-12 col-sm-3 col-md-12">
                <div class="ibox-title">
                    <h5>¿Cómo comprar?</h5>
                </div>
                <div class="ibox-content text-center">
                    <iframe id="videoInstitucional" src="https://www.youtube.com/embed/phNNZIud0Zo" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-12" style="padding-left:0;padding-right:0;">
                <iframe id="iframeFace" scrolling="yes" frameborder="0" allowTransparency="true" class="center-block"></iframe>
            </div>
        </div>

    </div>
</section>

<section  class="gray-section contact">
    <div class="container" style="background-color: white ;">
        @include('motonet/web/index/sucursales')
    </div>
</section>


    {{--   <div class="col-xs-12 col-sm-10">
           @include('motonet/web/servicios')
           @include('motonet/web/index/ventaTelefonica')--}}




</div>


<footer>
    <p>&copy;Motonet -  Av. Ricardo balbin 486 - San Miguel - Buenos Aires - 0810-333-6686 </p>
</footer>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Accesorios</h4>
            </div>
            <div class="modal-body">
                @include('motonet/web/index/accesorios')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Seguro</h4>
            </div>
            <div class="modal-body">
                @include('motonet/web/index/seguro')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Servicio Técnico</h4>
            </div>
            <div class="modal-body">
                @include('motonet/web/index/servicioTecnico')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Contacto</h4>
            </div>
            <div class="modal-body">
                @include('motonet/web/index/contacto')
            </div>
        </div>
    </div>
</div>



@yield('js')

<script src="assets/inspinia/js/plugins/slick/slick.min.js"></script>

<script>
        $("#inSlider2").find(".item").first().addClass('active');

    var t;
    $(document).ready(function () {
        t = parseInt($(".iboxFace").width());

        $('.slick_demo_2').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });



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

    $().ready(function(){
        $('#iframeFace').attr("src","https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmotonetonline&tabs=timeline%2Cmessages&width="+t+"&height=380&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=203933888898")
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 250;
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
                $(header).addClass('navbar-scroll');
                $('.navbar2').addClass('fixed-top');
            }
            else {
                $(header).removeClass('navbar-scroll');
                $('.navbar2').removeClass('fixed-top');
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

    $('#myCarousel').find('.item').first().addClass('active');


    $('#menuCategories').on('shown.bs.dropdown',function(ev){
        var ul = $('.h300');
        ul.each(function(pos){
//                alert(parseInt($(this).css('height')));
            if(parseInt($(this).css('height')) == 300 ){
                $(this).parent().find('.verMas').css('display','block');
            }

        });
    });



</script>



</body>
</html>
