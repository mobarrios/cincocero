@extends('motonet.web.new.templateNuevo2')

@section('fbq')
	<script>
		var contenido = "ViewContent";
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
				document,'script','https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '165095643906274');

		fbq('track', 'Search');

	</script>
@endsection

@section('sideContent')
			<div class="search-result-container">
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="grid-container">
						<div class="category-product  inner-top-vs">
							<div class="row">

								@foreach($productos as $producto)
									<div class="col-sm-6 col-md-4">
										<div class="products">
											<div class="product">
												<span class="label label-block promoDetail">{!!   $producto->destacado_text !!}</span>
												<div class="product-image">
													<div class="image">
														<a href="detalle/{!! $producto->titleClean.'/'.$producto->models->brands->nameClean.'/'.$producto->models->nameClean.'/'.$producto->id !!}"><img style="width: 200px" src="{{$producto->Models->Images->first()->image}}" alt="" ></a>
													</div><!-- /.image -->
													<div class="tag "><img style="width: 50px;" src="{{$producto->Models->Brands->Images->first()->image}}"> </div>
												</div><!-- /.product-image -->
												<div class="product-info text-left">
													<h3 class="name">
														<a href="detalle/{!! $producto->titleClean.'/'.$producto->models->brands->nameClean.'/'.$producto->models->nameClean.'/'.$producto->id !!}">{{$producto->Models->name}}</a>
													</h3>

													<div class="description">
														{{$producto->title}}
													</div>

													<div class="product-price">
														<span class="price">$ {{$producto->price}}</span>
														<span class="price-before-discount"></span>

													</div><!-- /.product-price -->
												</div><!-- /.product-info -->
												<div class="cart clearfix animate-effect">
													<div class="action">
														<a href="detalle/{!! $producto->titleClean.'/'.$producto->models->brands->nameClean.'/'.$producto->models->nameClean.'/'.$producto->id !!}" class="btn btn-primary btn-xs" type="button">ver Detalles</a>
													</div><!-- /.action -->
												</div><!-- /.cart -->
											</div><!-- /.product -->
										</div><!-- /.products -->
									</div><!-- /.item -->

								@endforeach

						</div>
					</div>
				</div>

			</div>


@endsection

@section('js')
	<script src="assets/unicase/js/owl.carousel.min.js"></script>
	<script src="assets/unicase/js/wow.min.js"></script>
@endsection