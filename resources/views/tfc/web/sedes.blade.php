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

                                @foreach($sedes as $sede)
                                    <li class="element">
                                        <article class="entry-item">
                                            <div class="entry-thumb hover-effect">
                                                <a href="#">
                                                 <img src="{{$sede->Images->first()->image or ''}}" alt="{{$sede->Images->first()->image or ''}}" />

                                                </a>

                                            </div>
                                            <!-- entry-thumb -->
                                            <div class="entry-content">
                                                <header>
                                                    <span class="entry-date">{{$sede->address}}</span>
                                                </header>
                                                <h1 class="entry-title">{{$sede->name}}</h1>
                                                <p>&nbsp;</p>
                                                <a href="{{'web/sede_detalle/'.$sede->id}}" class="more-link">ampliar ...</a> </div>
                                            <!-- entry-content -->
                                        </article>
                                        <!-- entry-item -->
                                    </li>
                                @endforeach


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