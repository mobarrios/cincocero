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
                        @foreach($galeria as $gal)
                            <div class="col-xs-3 pull-left" style="margin-top:15px">
                                <div class="item item-galeria">
                                    <article class="entry-item">
                                        <div class="entry-thumb hover-effect">
                                            <a class="group1" href="{!! $gal->images->first()->image !!}"><img src="{!! $gal->images->first()->image !!}" title="{!! $gal->name !!}" alt="{!! $gal->name !!}" /></a>
                                        </div>
                                    </article>
                                <!-- entry-item -->
                                </div>
                            </div>
                        @endforeach
                    </div>
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