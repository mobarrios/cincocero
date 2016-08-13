@extends('soffem/web/template')

@section('css')
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/fontello.css" rel="stylesheet">
@endsection

@section('content')


    <section  class="container features">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="mb-0"><span class="navy">LIGA</span></h1>
                <p>Primera división</p>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="slick_demo_2">
                @for($i = 1;$i < 10; $i++)
                    <a href="{!! route('equiposDetail') !!}" class="hover">
                        <div>
                            <div class="ibox-content" style="background-color:whitesmoke">
                                <div class="thumbnail h374">
                                    <img src="img/avatar{!! $i !!}.jpg" alt="" class="img-responsive">
                                    <div class="caption p0">
                                        <h4 class="text-center mt-0 fs15 text-primary">Equipo</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endfor
                <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>
            </div>
        </div>





        {{--POSICIONES--}}
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="mb-0"><span class="navy">TABLA DE POSICIONES</span></h1>
                {{--<p>Primera división</p>--}}
            </div>
        </div>

        <div class="col-xs-12">
            <div class="ibox float-e-margins">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Equipo</th>
                                <th>Pts.</th>
                                <th>PJ</th>
                                <th>PG</th>
                                <th>PE</th>
                                <th>PP</th>
                                <th>GF</th>
                                <th>GC</th>
                                <th>DIF</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i = 1;$i < 10; $i++)
                            <tr>
                                <td class="w50"><img src="img/avatar{!! $i !!}.jpg" alt="" class="img-responsive" width="50"></td>
                                <td>nndsakjndksajnd</td>
                                <td>12</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>

            </div>
        </div>



        {{--FIXTURE--}}
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="mb-0"><span class="navy">FIXTURE</span></h1>
                {{--<p>Primera división</p>--}}
            </div>
        </div>

        @for($i = 1;$i < 10; $i++)
        <div class="col-xs-12 col-md-6">
            <div class="ibox float-e-margins">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Fecha {!! $i !!}</th>
                        <th colspan="2" class="text-center">12-08-2016</th>
                        <th>16hs</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Equipo 1</td>
                            <td>5</td>
                            <td>5</td>
                            <td>Equipo 2</td>
                        </tr>
                    </tbody>
                    <tfooter>
                        <tr>
                            <td colspan="4" class="pt-sm">
                                <p class="text-center">Cancha 8 - <a href="">Sede San Juan</a></p>
                            </td>
                        </tr>
                    </tfooter>
                </table>
            </div>
        </div>
        @endfor


        {{--Jugadores destacados--}}
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="mb-0"><span class="navy">Destacados de la fecha</span></h1>
                {{--<p>Primera división</p>--}}
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <h1>Jugadores destacados</h1>
            <div class="col-xs-4">
                <img src="img/avatar1.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-xs-8">
                <h3><b>Nombre jugador</b></h3>
                <p class="mt0">Equipo</p>

                <h4>Observaciones</h4>
                <p>Observaciones del jugador</p>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <h1>Equipo destacado</h1>
            <div class="col-xs-4">
                <img src="img/avatar1.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-xs-8">
                <h3><b>Nombre equipo</b></h3>

                <h4>Nota</h4>
                <p>Observaciones del equipo</p>
            </div>
        </div>

        {{--Goleadores--}}
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="mb-0"><span class="navy">Goleadores</span></h1>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="ibox float-e-margins">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Jugador</th>
                        <th>Equipo</th>
                        <th>Goles</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 9;$i > 0; $i--)
                        <tr>
                            <td>Nombre Jugador</td>
                            <td>Equipo</td>
                            <td>{!! $i !!} goles</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>

            </div>
        </div>

        {{--Fair Play--}}
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="mb-0"><span class="navy">Fair Play</span></h1>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="ibox float-e-margins">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Posición</th>
                        <th>Equipo</th>
                        <th><i class="icon icon-cards yellow-card"></i></th>
                        <th><i class="icon icon-cards red-card"></i></th>
                        <th>pts</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 1;$i < 10; $i++)
                        <tr>
                            <td>{!! $i !!}</td>
                            <td>Nombre equipo</td>
                            <td>{!! $i !!}</td>
                            <td>0</td>
                            <td>33</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>

            </div>
        </div>

        {{--Sanciones--}}
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="mb-0"><span class="navy">Sanciones</span></h1>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="ibox float-e-margins">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Desde fecha</th>
                        <th>Hasta fecha</th>
                        <th>Equipo</th>
                        <th>Jugador</th>
                        <th>Motivo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 1;$i < 10; $i++)
                        <tr>
                            <td>{!! $i !!}</td>
                            <td>9</td>
                            <td>Nombre equipo</td>
                            <td>Nombre jugador</td>
                            <td>Motivo de la sanción</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>

            </div>
        </div>



    </section>
@endsection
@section('js')
    <script src="js/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 7,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });


            $.each($(".menu-dropdown #menu li.parent-menu"),function(i,data){
                $(data).attr('data-id',i);

                $.each($(".menu-dropdown .submenu"),function(e,d){
                    $(d).attr('data-parent',e);
                });
            });

            $(".menu-dropdown").on('click',function(ev){
                ev.preventDefault();
                ev.stopPropagation();

                var self = $(this);

                $.each($(self).find(".submenu"),function(i,data){
                    if($(data).hasClass("menu-active")){
                        $(data).removeClass("menu-active");
                        $(data).toggle();
                    }
                });


                $(this).find("#menu").toggle();

                $(this).find("#menu .parent-menu").on('click',function(ev){
                    ev.preventDefault();
                    ev.stopPropagation();

                    var ind = $(this).attr("data-id");

                    $.each($(self).find(".submenu"),function(i,data){
                        if($(data).hasClass("menu-active")){
                            $(data).removeClass("menu-active");
                            $(data).toggle();
                        }
                        $(data).click(function () {
                            window.location = $(data).find('a').attr('href');
                        });
                    });

                    $(self).find(".submenu[data-parent="+ind+"]").addClass('menu-active');
                    $(self).find(".submenu[data-parent="+ind+"]").toggle();

                });

            });


            $(".navbar-fixed-top").addClass("navbar-scroll")
//            $('body').scrollspy({
//                target: '.navbar-fixed-top',
//                offset: 80
//            });
//
//            // Page scrolling feature
//            $('a.page-scroll').bind('click', function(event) {
//                var link = $(this);
//                $('html, body').stop().animate({
//                    scrollTop: $(link.attr('href')).offset().top - 50
//                }, 500);
//                event.preventDefault();
//                $("#navbar").collapse('hide');
//            });
        });

//        var cbpAnimatedHeader = (function() {
//            var docElem = document.documentElement,
//                    header = document.querySelector( '.navbar-default' ),
//                    didScroll = false,
//                    changeHeaderOn = 200;
//            function init() {
//                window.addEventListener( 'scroll', function( event ) {
//                    if( !didScroll ) {
//                        didScroll = true;
//                        setTimeout( scrollPage, 250 );
//                    }
//                }, false );
//            }
//            function scrollPage() {
//                var sy = scrollY();
//                if ( sy >= changeHeaderOn ) {
//                    $(header).addClass('navbar-scroll')
//                }
//                else {
//                    $(header).removeClass('navbar-scroll')
//                }
//                didScroll = false;
//            }
//            function scrollY() {
//                return window.pageYOffset || docElem.scrollTop;
//            }
//            init();
//
//        })();

    </script>
@endsection