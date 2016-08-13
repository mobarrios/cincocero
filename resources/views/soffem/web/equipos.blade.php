@extends('soffem/web/template')

@section('css')
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/fontello.css" rel="stylesheet">
@endsection

@section('content')


    <section  class="container features">

        {{--POSICIONES--}}
        <div class="row m-b-lg m-t-lg">
            <div class="col-lg-12 text-center">
                <div class="center-block escudo">
                    <img src="img/avatar1.jpg" alt="" class="img-responsive">
                </div>
                <div class="navy-line m-t-md"></div>
                <h1 class="mb-0"><span class="navy">MANUEL DREAM TEAM</span></h1>
                {{--<p>Primera división</p>--}}
            </div>
        </div>

        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="ibox float-e-margins">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Jugador</th>
                                <th>Amarillas</th>
                                <th>Rojas</th>
                                <th>Goles</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i = 1;$i < 10; $i++)
                            <tr>
                                <td><a href="{!! route('jugadoresDetail') !!}" class="link-default">Jugador</a></td>
                                <td>1</td>
                                <td>0</td>
                                <td>{!! $i !!}</td>
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