@extends('motonet.web.new.templateNuevo2')

@section('sideContent')
<!-- ============================================== HEADER : END ============================================== -->
{{--<div class="breadcrumb">--}}
	{{--<div class="container">--}}
		{{--<div class="breadcrumb-inner">--}}
			{{--<ul class="list-inline list-unstyled">--}}
				{{--<li><a href="#">Home</a></li>--}}
				{{--<li><a href="#">Woman</a></li>--}}
				{{--<li class='active'>Samsung Galaxy S4 32GB White</li>--}}
			{{--</ul>--}}
		{{--</div><!-- /.breadcrumb-inner -->--}}
	{{--</div><!-- /.container -->--}}
{{--</div><!-- /.breadcrumb -->--}}
<div class="body-content">
	<div class='container'>
		<div class='row single-product '>


			<div class='col-md-9'>
				<div class="row  wow fadeInUp">
					<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
						<div class="product-item-holder size-big single-product-gallery small-gallery">

							<div id="owl-single-product">
								@if($publicationDetail->Models->Images->count() > 0)
									@foreach($publicationDetail->Models->Images as $ind => $img)
										<div class="single-product-gallery-item" id="slide{!! $ind !!}">
											<a data-lightbox="image-1" data-title="Gallery" href="{!! $img->image !!}">
												<img class="img-responsive" alt="" src="{!! $img->image!!}" data-echo="{!! $img->image!!}" />
											</a>
										</div><!-- /.single-product-gallery-item -->
									@endforeach
								@endif
							</div><!-- /.single-product-slider -->


							<div class="single-product-gallery-thumbs gallery-thumbs">

								<div id="owl-single-product-thumbnails">
									@if($publicationDetail->Models->Images->count() > 0)
										@foreach($publicationDetail->Models->Images as $ind => $img)
											<div class="item">
												<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="{!! $ind !!}" href="#slide1">
													<img class="img-responsive" width="85" alt="" src="{!! $img->image !!}" data-echo="{!! $img->image !!}" />
												</a>
											</div>
										@endforeach
									@endif
								</div><!-- /#owl-single-product-thumbnails -->



							</div><!-- /.gallery-thumbs -->

						</div><!-- /.single-product-gallery -->
					</div><!-- /.gallery-holder -->

					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name">{!! $publicationDetail->title!!}</h1>
							
							@if($publicationDetail->destacado_text != "")
								<div class="rating-reviews">
									<div class="row">

										<div class="col-sm-8">
											<div class="reviews">
												<span class="label promoDetail">{!! $publicationDetail->destacado_text !!}</span>
											</div>
										</div>
									</div><!-- /.row -->
								</div><!-- /.rating-reviews -->
							@endif

							@if($publicationDetail->promo != "")
								<div class="stock-container info-container m-t-10">
									<div class="row">
										<div class="col-sm-3">
											<div class="stock-box">
												<span class="label">Promo :</span>
											</div>
										</div>
										<div class="col-sm-9">
											<div class="stock-box">
												<span class="value">{!! $publicationDetail->promo !!}</span>
											</div>
										</div>
									</div><!-- /.row -->
								</div><!-- /.stock-container -->
							@endif

							{{--<div class="description-container m-t-20">--}}
								{{--Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Susp endisse posuere arcu diam, id accumsan eros pharetra ac. --}}
							{{--</div><!-- /.description-container -->--}}

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6 col-md-12">
										<div class="price-box">
											<span class="price">{!! $publicationDetail->price !!}</span>
											<span class="price-strike">$900.00</span>
										</div>
									</div>

									{{--<div class="col-sm-6">--}}
										{{--<div class="favorite-button m-t-10">--}}
											{{--<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">--}}
											    {{--<i class="fa fa-heart"></i>--}}
											{{--</a>--}}
											{{--<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">--}}
											   {{--<i class="fa fa-retweet"></i>--}}
											{{--</a>--}}
											{{--<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">--}}
											    {{--<i class="fa fa-envelope"></i>--}}
											{{--</a>--}}
										{{--</div>--}}
									{{--</div>--}}

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-2">
										<span class="label">Cantidad :</span>
									</div>
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
								                {{--<div class="arrows">--}}
								                  {{--<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>--}}
								                  {{--<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>--}}
								                {{--</div>--}}
								                <input type="text" placeholder="1" disabled="disabled">
							              </div>
							            </div>
									</div>

									<div class="col-sm-7">
										<a href="{!! route('addToCart',$publicationDetail->id) !!}" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> AGREGAR A LA COMPRA</a>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							{{--<div class="product-social-link m-t-20 text-right">--}}
								{{--<span class="social-label">Compartir :</span>--}}
								{{--<div class="social-icons">--}}
						            {{--<ul class="list-inline">--}}
						                {{--<li><a class="fa fa-facebook" href="http://facebook.com/transvelo"></a></li>--}}
						                {{--<li><a class="fa fa-twitter" href="#"></a></li>--}}
						                {{--<li><a class="fa fa-linkedin" href="#"></a></li>--}}
						                {{--<li><a class="fa fa-rss" href="#"></a></li>--}}
						                {{--<li><a class="fa fa-pinterest" href="#"></a></li>--}}
						            {{--</ul><!-- /.social-icons -->--}}
						        {{--</div>--}}
							{{--</div>--}}

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->

				

<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /		.body-content -->

@endsection

@section('content')
	<div class="body-content">
		<div class='container'>
			<div class='row single-product outer-bottom-sm '>
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
		<div class="row">
			<div class="col-sm-3">
				<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
					<li class="active"><a data-toggle="tab" href="#description">DESCRIPCIÓN</a></li>
					{{--<li><a data-toggle="tab" href="#review">REVIEW</a></li>--}}
					{{--<li><a data-toggle="tab" href="#tags">TAGS</a></li>--}}
				</ul><!-- /.nav-tabs #product-tabs -->
			</div>
			<div class="col-sm-9">

				<div class="tab-content">

					<div id="description" class="tab-pane in active">
						<div class="product-tab">
							{!! $publicationDetail->description !!}
						</div>
					</div><!-- /.tab-pane -->

				</div><!-- /.tab-content -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.product-tabs -->

	<!-- ============================================== UPSELL PRODUCTS ============================================== -->
				{{--<section class="section featured-product wow fadeInUp">--}}
		{{--<h3 class="section-title">También podés ver</h3>--}}
		{{--<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">--}}

			{{--<div class="item item-carousel">--}}
				{{--<div class="products">--}}

					{{--<div class="product">--}}
						{{--<div class="product-image">--}}
							{{--<div class="image">--}}
								{{--<a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" alt=""></a>--}}
							{{--</div><!-- /.image -->--}}

							{{--<div class="tag sale"><span>sale</span></div>--}}
						{{--</div><!-- /.product-image -->--}}


						{{--<div class="product-info text-left">--}}
							{{--<h3 class="name"><a href="detail.html">LG Smart Phone LP68</a></h3>--}}
							{{--<div class="rating rateit-small"></div>--}}
							{{--<div class="description"></div>--}}

							{{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}
								{{--<span class="price-before-discount">$ 800</span>--}}

							{{--</div><!-- /.product-price -->--}}

						{{--</div><!-- /.product-info -->--}}
						{{--<div class="cart clearfix animate-effect">--}}
							{{--<div class="action">--}}
								{{--<ul class="list-unstyled">--}}
									{{--<li class="add-cart-button btn-group">--}}
										{{--<button class="btn btn-primary icon" data-toggle="dropdown" type="button">--}}
											{{--<i class="fa fa-shopping-cart"></i>--}}
										{{--</button>--}}
										{{--<button class="btn btn-primary" type="button">Add to cart</button>--}}

									{{--</li>--}}

									{{--<li class="lnk wishlist">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Wishlist">--}}
											{{--<i class="icon fa fa-heart"></i>--}}
										{{--</a>--}}
									{{--</li>--}}

									{{--<li class="lnk">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Compare">--}}
											{{--<i class="fa fa-retweet"></i>--}}
										{{--</a>--}}
									{{--</li>--}}
								{{--</ul>--}}
							{{--</div><!-- /.action -->--}}
						{{--</div><!-- /.cart -->--}}
					{{--</div><!-- /.product -->--}}

				{{--</div><!-- /.products -->--}}
			{{--</div><!-- /.item -->--}}

			{{--<div class="item item-carousel">--}}
				{{--<div class="products">--}}

					{{--<div class="product">--}}
						{{--<div class="product-image">--}}
							{{--<div class="image">--}}
								{{--<a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" alt=""></a>--}}
							{{--</div><!-- /.image -->--}}

							{{--<div class="tag sale"><span>sale</span></div>--}}
						{{--</div><!-- /.product-image -->--}}


						{{--<div class="product-info text-left">--}}
							{{--<h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>--}}
							{{--<div class="rating rateit-small"></div>--}}
							{{--<div class="description"></div>--}}

							{{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}
								{{--<span class="price-before-discount">$ 800</span>--}}

							{{--</div><!-- /.product-price -->--}}

						{{--</div><!-- /.product-info -->--}}
						{{--<div class="cart clearfix animate-effect">--}}
							{{--<div class="action">--}}
								{{--<ul class="list-unstyled">--}}
									{{--<li class="add-cart-button btn-group">--}}
										{{--<button class="btn btn-primary icon" data-toggle="dropdown" type="button">--}}
											{{--<i class="fa fa-shopping-cart"></i>--}}
										{{--</button>--}}
										{{--<button class="btn btn-primary" type="button">Add to cart</button>--}}

									{{--</li>--}}

									{{--<li class="lnk wishlist">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Wishlist">--}}
											{{--<i class="icon fa fa-heart"></i>--}}
										{{--</a>--}}
									{{--</li>--}}

									{{--<li class="lnk">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Compare">--}}
											{{--<i class="fa fa-retweet"></i>--}}
										{{--</a>--}}
									{{--</li>--}}
								{{--</ul>--}}
							{{--</div><!-- /.action -->--}}
						{{--</div><!-- /.cart -->--}}
					{{--</div><!-- /.product -->--}}

				{{--</div><!-- /.products -->--}}
			{{--</div><!-- /.item -->--}}

			{{--<div class="item item-carousel">--}}
				{{--<div class="products">--}}

					{{--<div class="product">--}}
						{{--<div class="product-image">--}}
							{{--<div class="image">--}}
								{{--<a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/1.jpg" alt=""></a>--}}
							{{--</div><!-- /.image -->--}}

							{{--<div class="tag hot"><span>hot</span></div>--}}
						{{--</div><!-- /.product-image -->--}}


						{{--<div class="product-info text-left">--}}
							{{--<h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>--}}
							{{--<div class="rating rateit-small"></div>--}}
							{{--<div class="description"></div>--}}

							{{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}
								{{--<span class="price-before-discount">$ 800</span>--}}

							{{--</div><!-- /.product-price -->--}}

						{{--</div><!-- /.product-info -->--}}
						{{--<div class="cart clearfix animate-effect">--}}
							{{--<div class="action">--}}
								{{--<ul class="list-unstyled">--}}
									{{--<li class="add-cart-button btn-group">--}}
										{{--<button class="btn btn-primary icon" data-toggle="dropdown" type="button">--}}
											{{--<i class="fa fa-shopping-cart"></i>--}}
										{{--</button>--}}
										{{--<button class="btn btn-primary" type="button">Add to cart</button>--}}

									{{--</li>--}}

									{{--<li class="lnk wishlist">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Wishlist">--}}
											{{--<i class="icon fa fa-heart"></i>--}}
										{{--</a>--}}
									{{--</li>--}}

									{{--<li class="lnk">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Compare">--}}
											{{--<i class="fa fa-retweet"></i>--}}
										{{--</a>--}}
									{{--</li>--}}
								{{--</ul>--}}
							{{--</div><!-- /.action -->--}}
						{{--</div><!-- /.cart -->--}}
					{{--</div><!-- /.product -->--}}

				{{--</div><!-- /.products -->--}}
			{{--</div><!-- /.item -->--}}

			{{--<div class="item item-carousel">--}}
				{{--<div class="products">--}}

					{{--<div class="product">--}}
						{{--<div class="product-image">--}}
							{{--<div class="image">--}}
								{{--<a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>--}}
							{{--</div><!-- /.image -->--}}

							{{--<div class="tag new"><span>new</span></div>--}}
						{{--</div><!-- /.product-image -->--}}


						{{--<div class="product-info text-left">--}}
							{{--<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>--}}
							{{--<div class="rating rateit-small"></div>--}}
							{{--<div class="description"></div>--}}

							{{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}
								{{--<span class="price-before-discount">$ 800</span>--}}

							{{--</div><!-- /.product-price -->--}}

						{{--</div><!-- /.product-info -->--}}
						{{--<div class="cart clearfix animate-effect">--}}
							{{--<div class="action">--}}
								{{--<ul class="list-unstyled">--}}
									{{--<li class="add-cart-button btn-group">--}}
										{{--<button class="btn btn-primary icon" data-toggle="dropdown" type="button">--}}
											{{--<i class="fa fa-shopping-cart"></i>--}}
										{{--</button>--}}
										{{--<button class="btn btn-primary" type="button">Add to cart</button>--}}

									{{--</li>--}}

									{{--<li class="lnk wishlist">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Wishlist">--}}
											{{--<i class="icon fa fa-heart"></i>--}}
										{{--</a>--}}
									{{--</li>--}}

									{{--<li class="lnk">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Compare">--}}
											{{--<i class="fa fa-retweet"></i>--}}
										{{--</a>--}}
									{{--</li>--}}
								{{--</ul>--}}
							{{--</div><!-- /.action -->--}}
						{{--</div><!-- /.cart -->--}}
					{{--</div><!-- /.product -->--}}

				{{--</div><!-- /.products -->--}}
			{{--</div><!-- /.item -->--}}

			{{--<div class="item item-carousel">--}}
				{{--<div class="products">--}}

					{{--<div class="product">--}}
						{{--<div class="product-image">--}}
							{{--<div class="image">--}}
								{{--<a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>--}}
							{{--</div><!-- /.image -->--}}

							{{--<div class="tag hot"><span>hot</span></div>--}}
						{{--</div><!-- /.product-image -->--}}


						{{--<div class="product-info text-left">--}}
							{{--<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>--}}
							{{--<div class="rating rateit-small"></div>--}}
							{{--<div class="description"></div>--}}

							{{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}
								{{--<span class="price-before-discount">$ 800</span>--}}

							{{--</div><!-- /.product-price -->--}}

						{{--</div><!-- /.product-info -->--}}
						{{--<div class="cart clearfix animate-effect">--}}
							{{--<div class="action">--}}
								{{--<ul class="list-unstyled">--}}
									{{--<li class="add-cart-button btn-group">--}}
										{{--<button class="btn btn-primary icon" data-toggle="dropdown" type="button">--}}
											{{--<i class="fa fa-shopping-cart"></i>--}}
										{{--</button>--}}
										{{--<button class="btn btn-primary" type="button">Add to cart</button>--}}

									{{--</li>--}}

									{{--<li class="lnk wishlist">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Wishlist">--}}
											{{--<i class="icon fa fa-heart"></i>--}}
										{{--</a>--}}
									{{--</li>--}}

									{{--<li class="lnk">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Compare">--}}
											{{--<i class="fa fa-retweet"></i>--}}
										{{--</a>--}}
									{{--</li>--}}
								{{--</ul>--}}
							{{--</div><!-- /.action -->--}}
						{{--</div><!-- /.cart -->--}}
					{{--</div><!-- /.product -->--}}

				{{--</div><!-- /.products -->--}}
			{{--</div><!-- /.item -->--}}

			{{--<div class="item item-carousel">--}}
				{{--<div class="products">--}}

					{{--<div class="product">--}}
						{{--<div class="product-image">--}}
							{{--<div class="image">--}}
								{{--<a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" alt=""></a>--}}
							{{--</div><!-- /.image -->--}}

							{{--<div class="tag new"><span>new</span></div>--}}
						{{--</div><!-- /.product-image -->--}}


						{{--<div class="product-info text-left">--}}
							{{--<h3 class="name"><a href="detail.html">Nokia Lumia 520</a></h3>--}}
							{{--<div class="rating rateit-small"></div>--}}
							{{--<div class="description"></div>--}}

							{{--<div class="product-price">--}}
				{{--<span class="price">--}}
					{{--$650.99				</span>--}}
								{{--<span class="price-before-discount">$ 800</span>--}}

							{{--</div><!-- /.product-price -->--}}

						{{--</div><!-- /.product-info -->--}}
						{{--<div class="cart clearfix animate-effect">--}}
							{{--<div class="action">--}}
								{{--<ul class="list-unstyled">--}}
									{{--<li class="add-cart-button btn-group">--}}
										{{--<button class="btn btn-primary icon" data-toggle="dropdown" type="button">--}}
											{{--<i class="fa fa-shopping-cart"></i>--}}
										{{--</button>--}}
										{{--<button class="btn btn-primary" type="button">Add to cart</button>--}}

									{{--</li>--}}

									{{--<li class="lnk wishlist">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Wishlist">--}}
											{{--<i class="icon fa fa-heart"></i>--}}
										{{--</a>--}}
									{{--</li>--}}

									{{--<li class="lnk">--}}
										{{--<a class="add-to-cart" href="detail.html" title="Compare">--}}
											{{--<i class="fa fa-retweet"></i>--}}
										{{--</a>--}}
									{{--</li>--}}
								{{--</ul>--}}
							{{--</div><!-- /.action -->--}}
						{{--</div><!-- /.cart -->--}}
					{{--</div><!-- /.product -->--}}

				{{--</div><!-- /.products -->--}}
			{{--</div><!-- /.item -->--}}
		{{--</div><!-- /.home-owl-carousel -->--}}
	{{--</section><!-- /.section -->--}}
			</div>
		</div>
	</div>

@endsection

@section('js')
	<script src="assets/unicase/js/owl.carousel.min.js"></script>
	<script src="assets/unicase/js/wow.min.js"></script>
@endsection