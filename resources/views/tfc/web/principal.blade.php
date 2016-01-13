@extends('tfc/web/template')
    @section("content")
        <div class="clear"></div>

        <div class="sidebar left-sidebar widget-area-4">

            <div class="widget punica-entry-list-widget">
                <h2 class="widget-title clearfix">Ultimas Noticias</h2>
                <ul class="clearfix">
                    <li>
                        <article class="entry-item standard-post clearfix">
                            <div class="entry-thumb hover-effect">
                                <a class="twitter-timeline" href="https://twitter.com/FutbolCompany" data-widget-id="362267109901889536">Tweets por el @The Futbol Company.</a>

                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/ˆhttp:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>



                            <!-- entry-thumb --><!-- entry-content -->
                        </article>
                        <!-- entry-item -->
                    </li>
                    <li><!-- entry-item --><!-- entry-item -->                    </li>
                </ul>
            </div>
            <!-- punica-entry-list-widget -->

            <div class="widget punica-entry-slider-widget">
                <h2 class="widget-title clearfix">El clima</h2>
                <iframe src="{{asset("web/clima")}}" width="220" height="250" frameborder="0" border="0" scrolling="no" allowfullscreen></iframe>
                <!-- latest-item -->

                <!-- older-post -->
            </div>
            <!-- punica-entry-slider-widget --><!-- widget_archive -->

            <div class="widget punica-adv-widget"></div>
            <!-- punica-adv-widget -->

        </div>
        <!-- left-sidebar -->

        <div class="center-col">

            <div class="widget-area-3">
                <div class="widget punica-featured-news-widget">
                    <h2 class="widget-title clearfix">
                        <div class="categoria-container titulo-categoria" style="border-bottom-color: {{$categoria->color_bottom}};border-top-color: {{$categoria->color_bottom}};border-left-color: {{$categoria->color_bottom}}">
                            <div class="color-top" style="background-color: {{$categoria->color_top}};"></div>
                            <div class="color-bottom" style="background-color: {{$categoria->color_bottom}};">
                                <h2>NOTICIAS</h2>
                            </div>
                        </div>
                        {{--<img src="{{asset('assets/web/images/tabla_pos.png')}}" width="600" height="70" alt=""/>--}}
                    </h2>
                    <!-- punica-featured-news-slider -->
                    <ul class="older-post clearfix">
                        <div class="row"><br>
                            <div class="col-md-12 col-sm-12 mb-20">
                                <h6 class="elements-title">&nbsp;</h6>
                            </div>
                        </div>


                    </ul>
                    <!-- older-post --></div>
                <!-- punica-featured-news-widget --><!-- punica-entry-list-2-widget -->

            </div>
            <!-- widget-area-3 --><!-- widget-area-12 --><!-- widget-area-13 --><!-- widget-area-14 -->

        </div>
        <!-- center-col -->

        <div class="sidebar right-sidebar widget-area-5">

            <div class="widget widget_nav_menu">

                <div class="menu-all-pages-container">
                    <ul class="menu" id="menu-all-pages">
                        @foreach($torneos as $torneo)
                            <h2 class="widget-title">
                                <div class="categoria-container-xs titulo-categoria-xs" style="border-bottom-color: {{$categoria->color_bottom}};border-top-color: {{$categoria->color_bottom}};border-left-color: {{$categoria->color_bottom}}">
                                    <div class="color-top" style="background-color: {{$categoria->color_top}};"></div>
                                    <div class="color-bottom" style="background-color: {{$categoria->color_bottom}};">
                                        <h2>{{$torneo->name}}</h2>
                                    </div>
                                </div>
                                {{--<img src="{{asset('assets/web/images/f11.png')}}" width="201" height="38" alt=""/>--}}
                            </h2>

                        {{--<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/destacado")}}"><b>{{$torneo->name}}</b></a></li>--}}
                            @foreach($fases->where('tournaments_id',$torneo->id) as $fases)
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">{{$fases->name}}</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/resultado")}}">Posiciones y Resultados</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/proxima_fecha")}}">Proxima Fecha</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/fixture")}}">Fixture</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/sancion")}}">Sanciones</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/goleador")}}">Goleadores</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/fairplay")}}">Fair Play</a></li>
                                    </ul>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <!-- right-sidebar -->

        <div class="clear"></div>
        <!-- widget-area-6 -->

    @endsection()