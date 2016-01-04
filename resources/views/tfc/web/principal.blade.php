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
                    <h2 class="widget-title clearfix"><img src="images/tabla_pos.png" width="600" height="70" alt=""/></h2>
                    <!-- punica-featured-news-slider -->
                    <ul class="older-post clearfix">
                        <div class="row"><br>
                            <div class="col-md-12 col-sm-12 mb-20">
                                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                                    <tbody>
                                    <tr>
                                        <td colspan="2" align="center" class="info">Escudo</td>
                                        <td colspan="2" align="center" class="info">Equipo</td>
                                        <td colspan="2" align="center" class="info">Pts.</td>
                                        <td colspan="2" align="center" class="info">PJ</td>
                                        <td colspan="2" align="center" class="info">PG</td>
                                        <td colspan="2" align="center" class="info">PE</td>
                                        <td colspan="2" align="center" class="info">PP</td>
                                        <td colspan="2" align="center" class="info">GF</td>
                                        <td colspan="2" align="center" class="info">GC</td>
                                        <td colspan="2" align="center" class="info">DIF</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/01.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center" class="active"><a href="la_cantera.html">La Cantera</a></td>
                                        <td colspan="2" align="center" class="active">13</td>
                                        <td colspan="2" align="center" class="active">5</td>
                                        <td colspan="2" align="center" class="active">4</td>
                                        <td colspan="2" align="center" class="active">1</td>
                                        <td colspan="2" align="center" class="active">0</td>
                                        <td colspan="2" align="center" class="active">19</td>
                                        <td colspan="2" align="center" class="active">3</td>
                                        <td colspan="2" align="center" class="active">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/02.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center">Derby</td>
                                        <td colspan="2" align="center">13</td>
                                        <td colspan="2" align="center">5</td>
                                        <td colspan="2" align="center">4</td>
                                        <td colspan="2" align="center">1</td>
                                        <td colspan="2" align="center">0</td>
                                        <td colspan="2" align="center">19</td>
                                        <td colspan="2" align="center">3</td>
                                        <td colspan="2" align="center">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/03.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center" class="active">Stoke City</td>
                                        <td colspan="2" align="center" class="active">13</td>
                                        <td colspan="2" align="center" class="active">5</td>
                                        <td colspan="2" align="center" class="active">4</td>
                                        <td colspan="2" align="center" class="active">1</td>
                                        <td colspan="2" align="center" class="active">0</td>
                                        <td colspan="2" align="center" class="active">19</td>
                                        <td colspan="2" align="center" class="active">3</td>
                                        <td colspan="2" align="center" class="active">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/04.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center">Arlekin FC</td>
                                        <td colspan="2" align="center">13</td>
                                        <td colspan="2" align="center">5</td>
                                        <td colspan="2" align="center">4</td>
                                        <td colspan="2" align="center">1</td>
                                        <td colspan="2" align="center">0</td>
                                        <td colspan="2" align="center">19</td>
                                        <td colspan="2" align="center">3</td>
                                        <td colspan="2" align="center">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/05.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center" class="active">La Amistad</td>
                                        <td colspan="2" align="center" class="active">13</td>
                                        <td colspan="2" align="center" class="active">5</td>
                                        <td colspan="2" align="center" class="active">4</td>
                                        <td colspan="2" align="center" class="active">1</td>
                                        <td colspan="2" align="center" class="active">0</td>
                                        <td colspan="2" align="center" class="active">19</td>
                                        <td colspan="2" align="center" class="active">3</td>
                                        <td colspan="2" align="center" class="active">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/06.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center">Cabo Verde</td>
                                        <td colspan="2" align="center">13</td>
                                        <td colspan="2" align="center">5</td>
                                        <td colspan="2" align="center">4</td>
                                        <td colspan="2" align="center">1</td>
                                        <td colspan="2" align="center">0</td>
                                        <td colspan="2" align="center">19</td>
                                        <td colspan="2" align="center">3</td>
                                        <td colspan="2" align="center">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/07.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center" class="active">El Tano</td>
                                        <td colspan="2" align="center" class="active">13</td>
                                        <td colspan="2" align="center" class="active">5</td>
                                        <td colspan="2" align="center" class="active">4</td>
                                        <td colspan="2" align="center" class="active">1</td>
                                        <td colspan="2" align="center" class="active">0</td>
                                        <td colspan="2" align="center" class="active">19</td>
                                        <td colspan="2" align="center" class="active">3</td>
                                        <td colspan="2" align="center" class="active">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/08.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center">Clandestino</td>
                                        <td colspan="2" align="center">13</td>
                                        <td colspan="2" align="center">5</td>
                                        <td colspan="2" align="center">4</td>
                                        <td colspan="2" align="center">1</td>
                                        <td colspan="2" align="center">0</td>
                                        <td colspan="2" align="center">19</td>
                                        <td colspan="2" align="center">3</td>
                                        <td colspan="2" align="center">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/09.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center" class="active">Drognitz</td>
                                        <td colspan="2" align="center" class="active">13</td>
                                        <td colspan="2" align="center" class="active">5</td>
                                        <td colspan="2" align="center" class="active">4</td>
                                        <td colspan="2" align="center" class="active">1</td>
                                        <td colspan="2" align="center" class="active">0</td>
                                        <td colspan="2" align="center" class="active">19</td>
                                        <td colspan="2" align="center" class="active">3</td>
                                        <td colspan="2" align="center" class="active">16</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" class="active"><img src="escudos/10.png" width="35" height="35" alt=""/></td>
                                        <td colspan="2" align="center">Colo Colo</td>
                                        <td colspan="2" align="center">13</td>
                                        <td colspan="2" align="center">5</td>
                                        <td colspan="2" align="center">4</td>
                                        <td colspan="2" align="center">1</td>
                                        <td colspan="2" align="center">0</td>
                                        <td colspan="2" align="center">19</td>
                                        <td colspan="2" align="center">3</td>
                                        <td colspan="2" align="center">16</td>
                                    </tr>
                                    </tbody>
                                </table>
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
                <h2 class="widget-title"><img src="images/f11.png" width="201" height="38" alt=""/></h2>
                <div class="menu-all-pages-container">
                    <ul class="menu" id="menu-all-pages">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/destacado")}}">Destacado de la Fecha</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><b>LIGA TFC CHAMPIONS</b></li>


                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie A</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/resultado")}}">Posiciones y Resultados</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/proxima_fecha")}}">Proxima Fecha</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/fixture")}}">Fixture</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/sancion")}}">Sanciones</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/goleador")}}">Goleadores</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/fairplay")}}">Fair Play</a></li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie B</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><b>TORNEO LIGA TFC CHAMPIONS</b></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie B</a></li>
                            </ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><b>TORNEO BUNDESLIGA</b></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie A</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie B</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie C</a></li>
                            </ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><b>TORNEO PREMIER LEAGUE</b></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie A</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie B</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie C</a></li>
                            </ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><b>TORNEO LEGA CALCIO</b></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie A</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie B</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Serie C</a></li>
                            </ul>
                            <br>
                    </ul>
                </div>
            </div>
            <!-- widget_nav_menu --><!-- punica-socials-link-widget --><!-- punica-trending-post-widget --><!-- punica-news-letter-widget --><!-- punica-twitter-widget --><!-- punica-poll-widget --><!-- widget -->

        </div>
        <!-- right-sidebar -->

        <div class="clear"></div>
        <!-- widget-area-6 -->

    @endsection()