<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header" style="padding: 50px 0px 0px 0px ;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder mt-n81">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    <a href="home.html">

                        <img src="assets/web/img/logo.png" alt="" width="250">

                    </a>
                </div><!-- /.logo -->
                <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                <div class="contact-row">
                    <div class="phone inline">
                        <i class="icon fa fa-phone"></i> 0810-333-6686
                    </div>
                    <div class="contact inline">
                        <i class="icon fa fa-envelope"></i> ventas@motonet.com.ar
                    </div>
                </div><!-- /.contact-row -->
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                    <form>
                        <div class="control-group">

                            <ul class="categories-filter animate-dropdown">
                            </ul>

                            <input class="search-field" placeholder="Buscar Producto..." />

                            <a class="search-button" href="#" ></a>

                        </div>
                    </form>
                </div><!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                <div class="dropdown dropdown-cart">
                    <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                        <div class="items-cart-inner">
                            <div class="total-price-basket">
                                <span class="lbl">tu compra -</span>
                                <span class="total-price">
                                    <span class="sign">$</span>
                                    <span class="value">
                                        @if(\Illuminate\Support\Facades\Session::get('carrito'))
                                            {!! $carrito['precio'] !!}
                                        @else
                                            00.00
                                        @endif
                                    </span>
                                </span>
                            </div>
                            <div class="basket">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                            </div>
                            <div class="basket-item-count">
                                <span class="count">
                                    @if(\Illuminate\Support\Facades\Session::get('carrito'))
                                        {!! $carrito['totalProductos'] !!}
                                    @else
                                        0
                                    @endif
                                </span>
                            </div>

                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>

                            @if(Session::get('carrito'))
                                @foreach(Session::get('carrito') as $id)
                                    <div class="cart-item product-summary">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="image">
                                                    <a href="{!! route('productDetail',$id) !!}">
                                                    @if(\App\Entities\motonet\Publications::find($id)->Images->count() > 0)
                                                            <img class="img-responsive" src="{!! \App\Entities\motonet\Publications::find($id)->Images->first()->image !!}" alt="{!! \App\Entities\motonet\Publications::find($id)->title !!}"></a>
                                                    @else
                                                            <img src="" alt="{!! \App\Entities\motonet\Publications::find($id)->title !!}"></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-xs-7">

                                                <h3 class="name"><a href="{!! route('productDetail',$id) !!}">{!! \App\Entities\motonet\Publications::find($id)->models->name !!}</a></h3>
                                                <div class="price">{!! \App\Entities\motonet\Publications::find($id)->price !!}</div>
                                            </div>
                                            <div class="col-xs-1 action">
                                                <a href="{!! route('deleteFromCart',$id) !!}"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.cart-item -->
                                    <div class="clearfix"></div>
                                    <hr>
                                @endforeach
                            @endif


                            <div class="clearfix cart-total">
                                <div class="pull-right">

                                    <span class="text">Sub Total :</span>
                                    <span class='price'>
                                        $
                                        @if(\Illuminate\Support\Facades\Session::get('carrito'))
                                            {!! $carrito['precio'] !!}
                                        @else
                                            00.00
                                        @endif
                                    </span>

                                </div>
                                <div class="clearfix"></div>

                                <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                            </div><!-- /.cart-total-->


                        </li>
                    </ul><!-- /.dropdown-menu-->
                </div><!-- /.dropdown-cart -->

                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
        </div><!-- /.row -->

    </div><!-- /.container -->

</div><!-- /.main-header -->


@section('js')
    <script>
        alert('das');
    </script>
@endsection