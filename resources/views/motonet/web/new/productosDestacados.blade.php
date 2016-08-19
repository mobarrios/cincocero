<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">Productos Destacados</h3>
      </div>

    <div class="tab-content outer-top-xs">
        <div class="tab-pane in active" id="all">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="5">

                    @foreach($publications as $publication)

                    <div class="item item-carousel">

                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href=""><img style="width: 200px;" src="{{$publication->Models->Images->first()->image }}" data-echo="{{$publication->Models->Images->first()->image }}" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">{{$publication->title}}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price">
                    <span class="price">
                        $ {{$publication->price}}			</span>
                                            <span class="price-before-discount">$ {{$publication->price}}</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-retweet"></i>
                                                    </a>
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