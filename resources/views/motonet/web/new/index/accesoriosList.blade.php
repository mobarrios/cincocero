    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            @foreach($accesorios as $p)
                @if(!$p->private)
                <div class="item">
                    <div class="products best-product">

                        <div class="product">
                            <div class="text-center" >
                                <label class="label label-danger">{{$p->destacado_text}}</label>
                            </div>
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="{!! route('productDetail',[$p->models->nameClean,$p->id]) !!}" data-lightbox="image-1" data-title="{{$p->name }}" class="linkbyn">
                                                    <img data-echo="{{$p->Models->Images->first()->image  or ''}}" src="{{$p->Models->Images->first()->image  or ''}}" class="img-responsive" alt="">
                                                    <div class="zoom-overlay"></div>
                                                </a>
                                            </div><!-- /.image -->

                                        </div><!-- /.product-image -->
                                    </div><!-- /.col -->
                                    <div class="col col-xs-7">
                                        <div class="product-info">
                                            <h3>{{$p->models->brands->name}}</h3>
                                            <h3 class="name"><a href="{!! route('productDetail',[$p->models->nameClean,$p->id]) !!}">{{$p->title}}</a></h3>
                                            <div class="product-price">
                                                <span class="price">$ {{$p->price}}</span>

                                            </div><!-- /.product-price -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <a class="btn btn-primary icon" href="{!! route('addToCart',$p->id) !!}">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a class="btn btn-primary" type="button" href="{!! route('productDetail',[$p->models->nameClean,$p->id]) !!}">ver</a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.product-micro-row -->
                            </div><!-- /.product-micro -->

                        </div>

                    </div>
                </div>
                @endif
            @endforeach

        </div>
    </div><!-- /.sidebar-widget-body -->
