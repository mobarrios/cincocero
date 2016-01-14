@extends('tfc/web/template')
@section("content")
    @include('tfc/web/leftbar/leftbar')
    <div class="center-col">
            
            <center>
              <div class="widget-area-3">
                <div class="widget punica-featured-news-widget">
                  <h2 class="widget-title clearfix">Galeria de Imagenes</h2>
                  <!-- punica-featured-news-slider -->
                  
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-20">
                        
                        
                        <div class="carousel-imgs-container">
                            <div class="carousel-imgs-wrapper">

                                <div class="owl-carousel punica-carousel-imgs">
                                @foreach($galeria as $gal)
                                    <div class="item">
                                        <article class="entry-item">
                                            <div class="entry-thumb hover-effect">
                                                <a class="group1" href="{!! $gal->images->first()->image !!}"><img src="{!! $gal->images->first()->image !!}" title="{!! $gal->name !!}" alt="{!! $gal->name !!}" /></a>
                                            </div>
                                        </article>
                                        <!-- entry-item -->
                                    </div>
                                @endforeach
                                    <!-- item -->
                                </div>
                                <!-- punica-carousel-imgs -->
                            </div>
                            <!-- carousel-imgs-wrapper -->

                        </div>
                        <!-- carousel-imgs-container -->
                    </div>
                    <!-- col-md-12 -->
                </div><br>

                </div>
                <!-- punica-featured-news-widget -->
                <!-- punica-entry-list-2-widget -->
              </div>
            </center>
            <!-- breadcrumb --><!-- elements-box -->

        </div>
        <!-- center-col -->
@endsection