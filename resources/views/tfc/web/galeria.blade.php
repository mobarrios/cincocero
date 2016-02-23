@extends('tfc/web/template')
@section("content")
    @include('tfc/web/leftbar/leftbar')
    <div class="center-col">
            
            <center>
              <div class="widget-area-3">
                <div class="widget ">
                  <h2 class="widget-title clearfix">Galeria de Imagenes</h2>
                  <!-- punica-featured-news-slider -->
                  
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-20">
                        @foreach($galeria as $gal)
                            <div class="col-xs-3 pull-left" style="margin-top:15px">
                                <div class="item item-galeria">
                                    <article class="entry-item">
                                        <div class="entry-thumb hover-effect slides">
                                            <a class="group1" href="{!! $gal->images->first()->image !!}"><img src="{!! $gal->images->first()->image !!}" title="{!! $gal->name !!}" alt="{!! $gal->name !!}" data-toggle="modal" data-target="#myModal"/></a>
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


    <div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection