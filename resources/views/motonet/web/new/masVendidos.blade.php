<div class="sidebar-widget wow fadeInUp outer-bottom-vs">
    <h3 class="section-title">Más Vendidos</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            @foreach(\App\Entities\motonet\Publications::all() as $p)
                <div class="item">
                    <div class="products best-product">

                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="{{$p->Models->Images->first()->image }}" data-lightbox="image-1" data-title="{{$p->name }}">
                                                    <img data-echo="{{$p->Models->Images->first()->image }}" src="{{$p->Models->Images->first()->image }}" class="img-responsive byn" alt="">
                                                    <div class="zoom-overlay"></div>
                                                </a>
                                            </div><!-- /.image -->

                                        </div><!-- /.product-image -->
                                    </div><!-- /.col -->
                                    <div class="col col-xs-7">
                                        <div class="product-info">
                                            <h3>{{$p->models->brands->name}}</h3>
                                            <h3 class="name"><a href="#">{{$p->title}}</a></h3>
                                            <div class="product-price">
                                                <span class="price">$ {{$p->price}}</span>

                                            </div><!-- /.product-price -->
                                            <div class="action"><a href="#" class="lnk btn btn-primary">detalle</a></div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.product-micro-row -->
                            </div><!-- /.product-micro -->

                        </div>

                    </div>
                </div>
            @endforeach
            {{--<div class="item">--}}
                {{--<div class="products best-product">--}}
                    {{--<div class="product">--}}
                        {{--<div class="product-micro">--}}
                            {{--<div class="row product-micro-row">--}}
                                {{--<div class="col col-xs-5">--}}
                                    {{--<div class="product-image">--}}
                                        {{--<div class="image">--}}
                                            {{--<a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">--}}
                                                {{--<img class="byn img-responsive" data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="">--}}
                                                {{--<div class="zoom-overlay"></div>--}}
                                            {{--</a>--}}
                                        {{--</div><!-- /.image -->--}}


                                    {{--</div><!-- /.product-image -->--}}
                                {{--</div><!-- /.col -->--}}
                                {{--<div class="col col-xs-7">--}}
                                    {{--<div class="product-info">--}}
                                        {{--<h3 class="name"><a href="#">Apple Iphone 5s</a></h3>--}}
                                        {{--<div class="rating rateit-small"></div>--}}
                                        {{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}

                                        {{--</div><!-- /.product-price -->--}}
                                        {{--<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                            {{--</div><!-- /.product-micro-row -->--}}
                        {{--</div><!-- /.product-micro -->--}}

                    {{--</div>--}}
                    {{--<div class="product">--}}
                        {{--<div class="product-micro">--}}
                            {{--<div class="row product-micro-row">--}}
                                {{--<div class="col col-xs-5">--}}
                                    {{--<div class="product-image">--}}
                                        {{--<div class="image">--}}
                                            {{--<a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">--}}
                                                {{--<img data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="" class="byn img-responsive">--}}
                                                {{--<div class="zoom-overlay"></div>--}}
                                            {{--</a>--}}
                                        {{--</div><!-- /.image -->--}}


                                        {{--<div class="tag tag-micro sale">--}}
                                            {{--<span>sale</span>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- /.product-image -->--}}
                                {{--</div><!-- /.col -->--}}
                                {{--<div class="col col-xs-7">--}}
                                    {{--<div class="product-info">--}}
                                        {{--<h3 class="name"><a href="#">Apple Iphone 5s</a></h3>--}}
                                        {{--<div class="rating rateit-small"></div>--}}
                                        {{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}

                                        {{--</div><!-- /.product-price -->--}}
                                        {{--<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                            {{--</div><!-- /.product-micro-row -->--}}
                        {{--</div><!-- /.product-micro -->--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<div class="products best-product">--}}
                    {{--<div class="product">--}}
                        {{--<div class="product-micro">--}}
                            {{--<div class="row product-micro-row">--}}
                                {{--<div class="col col-xs-5">--}}
                                    {{--<div class="product-image">--}}
                                        {{--<div class="image">--}}
                                            {{--<a href="assets/unicase/images/products/s3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">--}}
                                                {{--<img data-echo="assets/unicase/images/products/s3.jpg" src="assets/unicase/images/blank.gif" alt="" class="byn img-responsive">--}}
                                                {{--<div class="zoom-overlay"></div>--}}
                                            {{--</a>--}}
                                        {{--</div><!-- /.image -->--}}
                                        {{--<div class="tag tag-micro hot">--}}
                                            {{--<span>hot</span>--}}
                                        {{--</div>--}}


                                    {{--</div><!-- /.product-image -->--}}
                                {{--</div><!-- /.col -->--}}
                                {{--<div class="col col-xs-7">--}}
                                    {{--<div class="product-info">--}}
                                        {{--<h3 class="name"><a href="#">Canon EOS 60D</a></h3>--}}
                                        {{--<div class="rating rateit-small"></div>--}}
                                        {{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}

                                        {{--</div><!-- /.product-price -->--}}
                                        {{--<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                            {{--</div><!-- /.product-micro-row -->--}}
                        {{--</div><!-- /.product-micro -->--}}

                    {{--</div>--}}
                    {{--<div class="product">--}}
                        {{--<div class="product-micro">--}}
                            {{--<div class="row product-micro-row">--}}
                                {{--<div class="col col-xs-5">--}}
                                    {{--<div class="product-image">--}}
                                        {{--<div class="image">--}}
                                            {{--<a href="assets/unicase/images/products/s3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">--}}
                                                {{--<img data-echo="assets/unicase/images/products/s3.jpg" src="assets/unicase/images/blank.gif" alt="" class="byn img-responsive">--}}
                                                {{--<div class="zoom-overlay"></div>--}}
                                            {{--</a>--}}
                                        {{--</div><!-- /.image -->--}}


                                    {{--</div><!-- /.product-image -->--}}
                                {{--</div><!-- /.col -->--}}
                                {{--<div class="col col-xs-7">--}}
                                    {{--<div class="product-info">--}}
                                        {{--<h3 class="name"><a href="#">Canon EOS 60D</a></h3>--}}
                                        {{--<div class="rating rateit-small"></div>--}}
                                        {{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}

                                        {{--</div><!-- /.product-price -->--}}
                                        {{--<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                            {{--</div><!-- /.product-micro-row -->--}}
                        {{--</div><!-- /.product-micro -->--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<div class="products best-product">--}}
                    {{--<div class="product">--}}
                        {{--<div class="product-micro">--}}
                            {{--<div class="row product-micro-row">--}}
                                {{--<div class="col col-xs-5">--}}
                                    {{--<div class="product-image">--}}
                                        {{--<div class="image">--}}
                                            {{--<a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">--}}
                                                {{--<img data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="" class="byn img-responsive">--}}
                                                {{--<div class="zoom-overlay"></div>--}}
                                            {{--</a>--}}
                                        {{--</div><!-- /.image -->--}}
                                        {{--<div class="tag tag-micro hot">--}}
                                            {{--<span>hot</span>--}}
                                        {{--</div>--}}


                                    {{--</div><!-- /.product-image -->--}}
                                {{--</div><!-- /.col -->--}}
                                {{--<div class="col col-xs-7">--}}
                                    {{--<div class="product-info">--}}
                                        {{--<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>--}}
                                        {{--<div class="rating rateit-small"></div>--}}
                                        {{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}

                                        {{--</div><!-- /.product-price -->--}}
                                        {{--<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                            {{--</div><!-- /.product-micro-row -->--}}
                        {{--</div><!-- /.product-micro -->--}}

                    {{--</div>--}}
                    {{--<div class="product">--}}
                        {{--<div class="product-micro">--}}
                            {{--<div class="row product-micro-row">--}}
                                {{--<div class="col col-xs-5">--}}
                                    {{--<div class="product-image">--}}
                                        {{--<div class="image">--}}
                                            {{--<a href="assets/unicase/images/products/s2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">--}}
                                                {{--<img data-echo="assets/unicase/images/products/s2.jpg" src="assets/unicase/images/blank.gif" alt="" class="byn img-responsive">--}}
                                                {{--<div class="zoom-overlay"></div>--}}
                                            {{--</a>--}}
                                        {{--</div><!-- /.image -->--}}


                                    {{--</div><!-- /.product-image -->--}}
                                {{--</div><!-- /.col -->--}}
                                {{--<div class="col col-xs-7">--}}
                                    {{--<div class="product-info">--}}
                                        {{--<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>--}}
                                        {{--<div class="rating rateit-small"></div>--}}
                                        {{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}

                                        {{--</div><!-- /.product-price -->--}}
                                        {{--<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                            {{--</div><!-- /.product-micro-row -->--}}
                        {{--</div><!-- /.product-micro -->--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->