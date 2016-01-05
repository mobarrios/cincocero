@extends('tfc/web/template')
    @section('content')
        <div class="center-col">

            <center>
                <div class="widget-area-3">
                    <div class="widget punica-featured-news-widget">
                        <h2 class="widget-title clearfix">Nuestras Sedes</h2>
                        <!-- punica-featured-news-slider -->
                        <div class="masonry-wrapper">
                            <ul class="punica-entry-list clearfix">
                                <li class="element">
                                    <article class="entry-item">
                                        <div class="entry-thumb hover-effect"> <a href="#"><img src="noticias/001.jpg" alt="" /></a> </div>
                                        <!-- entry-thumb -->
                                        <div class="entry-content">
                                            <header> <span class="entry-date">Noviembre 12, 2015</span> </header>
                                            <h6 class="entry-title">La Guapeada</h6>
                                            <p>&nbsp;</p>
                                            <a href="{{asset('/web/la_guapeada')}}" class="more-link">ampliar ...</a> </div>
                                        <!-- entry-content -->
                                    </article>
                                    <!-- entry-item -->
                                </li>
                                <!-- element -->
                                <li class="element">
                                    <article class="entry-item">
                                        <div class="entry-thumb hover-effect"> <a href="#"><img src="noticias/002.jpg" alt="" /></a> </div>
                                        <!-- entry-thumb -->
                                        <div class="entry-content">
                                            <header> <span class="entry-date">Noviembre 12, 2015</span> </header>
                                            <h6 class="entry-title">Foetra</h6>
                                            <p>&nbsp;</p>
                                            <a href="#" class="more-link">ampliar ...</a> </div>
                                        <!-- entry-content -->
                                    </article>
                                    <!-- entry-item -->
                                </li>
                                <!-- element -->
                                <li class="element">
                                    <article class="entry-item">
                                        <div class="entry-thumb hover-effect"> <a href="#"><img src="noticias/003.jpg" alt="" /></a> </div>
                                        <!-- entry-thumb -->
                                        <div class="entry-content">
                                            <header> <span class="entry-date">Noviembre 12, 2015</span> </header>
                                            <h6 class="entry-title">AEFIP</h6>
                                            <p>&nbsp;</p>
                                            <a href="#" class="more-link">ampliar ...</a> </div>
                                        <!-- entry-content -->
                                    </article>
                                    <!-- entry-item -->
                                </li>
                                <!-- element -->
                                <li class="element">
                                    <!-- entry-item --></li>
                                <!-- element -->
                                <!-- element -->
                            </ul>
                            <!-- punica-entry-list -->
                            <!-- pagination -->
                        </div>
                        <!-- older-post -->
                    </div>
                    <!-- punica-featured-news-widget -->
                    <!-- punica-entry-list-2-widget -->
                </div>
            </center>
            <!-- breadcrumb --><!-- elements-box -->

        </div>
    @endsection