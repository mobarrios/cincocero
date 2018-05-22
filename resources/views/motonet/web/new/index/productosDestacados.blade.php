<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp destacados">
    <div class="more-info-tab clearfix ">
{{--
        <h3 class="new-product-title pull-left" style="font-size:45px;color:#ff0000"><span class="fa fa-fire"></span> HOT SALE!</h3>
--}}
        <h3 class="new-product-title pull-left" >Productos Destacados</h3>

    </div>

    <div class="tab-content outer-top-xs">
        <div class="tab-pane in active" id="all">
            <div class="category-product">
                <div class="row">
                    @foreach($publications as $publication)
                    @if(!$publication->private)
                    <div style="height: 400px;" class="col-sm-6 col-md-3 col-xs-12" >
                        <div class="item ">

                            <div class="products">

                                <div class="product">
                                    <div class="text-center" >
                                        <label class="label label-danger" style="font-size: 10px">{{$publication->destacado_text}}</label>


                                    </div>
                                    <div class="product-image m-r-15">
                                        <div class="image">
                                            <a href="{!! route('productDetail',[$publication->models->nameClean,$publication->id]) !!}">
                                                <img style="width: 200px;" src="{{$publication->Models->Images->first()->image }}" data-echo="{{$publication->Models->Images->first()->image or ''}}" class=" img-responsive" alt=""></a>
                                        </div><!-- /.image -->
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 >{{$publication->models->brands->name}}</h3>
                                        <h3 class="name"><a href="{!! route('productDetail',[$publication->models->nameClean,$publication->id]) !!}">{{$publication->title}}</a></h3>
                                        <div class="product-price">
                                            <span class="price">{{$publication->promo}}</span>
                                            {{--<span class="price-before-discount">$ {{$publication->price}}</span>--}}

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <a class="btn btn-primary icon" href="{!! route('addToCart',$publication->id) !!}">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a class="btn btn-primary" type="button" href="{!! route('productDetail',[$publication->models->nameClean,$publication->id]) !!}">ver</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->

                        </div><!-- /.item -->
                    </div>
                    @endif

                    @endforeach
                </div>
            </div><!-- /.product-slider -->
        </div><!-- /.tab-pane -->

    </div><!-- /.tab-content -->
</div><!-- /.scroll-tabs -->