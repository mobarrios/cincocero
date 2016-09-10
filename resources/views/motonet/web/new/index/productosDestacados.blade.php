<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp destacados">
    <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">Productos Destacados</h3>
      </div>

    <div class="tab-content outer-top-xs">
        <div class="tab-pane in active" id="all">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme overflow-visible" data-item="5">

                    @foreach($publications as $publication)

                    <div class="item item-carousel">

                            <div class="products">

                                <div class="product">
                                    <div class="text-center" >
                                        <label class="label label-danger">{{$publication->destacado_text}}</label>
                                    </div>
                                    <div class="product-image m-r-15">
                                        <div class="image">
                                            <a href="{!! $publication->titleClean.'/'.$publication->models->brands->nameClean.'/'.$publication->models->nameClean.'/'.$publication->id !!}"><img style="width: 200px;" src="{{$publication->Models->Images->first()->image }}" data-echo="{{$publication->Models->Images->first()->image or ''}}" class=" img-responsive" alt=""></a>
                                        </div><!-- /.image -->
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 >{{$publication->models->brands->name}}</h3>
                                        <h3 class="name"><a href="{!! $publication->titleClean.'/'.$publication->models->brands->nameClean.'/'.$publication->models->nameClean.'/'.$publication->id !!}">{{$publication->title}}</a></h3>
                                        <div class="product-price">
                                            <span class="price">$ {{$publication->price}}</span>
                                            {{--<span class="price-before-discount">$ {{$publication->price}}</span>--}}

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="carts clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <a class="btn btn-primary" type="button" href="{!! $publication->titleClean.'/'.$publication->models->brands->nameClean.'/'.$publication->models->nameClean.'/'.$publication->id !!}">ver</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->

                        </div><!-- /.item -->


                    @endforeach

                </div><!-- /.home-owl-carousel -->
            </div><!-- /.product-slider -->
        </div><!-- /.tab-pane -->

    </div><!-- /.tab-content -->
</div><!-- /.scroll-tabs -->