@extends('soffem/web/template')

@section('css')
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
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
                        <th>Fecha</th>
                        <th></th>
                        <th></th>
                        <th>{!! $i !!}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endfor



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