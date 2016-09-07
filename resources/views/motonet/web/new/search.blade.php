@extends('motonet.web.new.templateNuevo2')

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
														<a href="{!! $producto->titleClean.'/'.$producto->models->brands->nameClean.'/'.$producto->models->nameClean.'/'.$producto->id !!}"><img style="width: 200px" src="{{$producto->Models->Images->first()->image}}" alt="" ></a>
													</div><!-- /.image -->
													<div class="tag "><img style="width: 50px;" src="{{$producto->Models->Brands->Images->first()->image}}"> </div>
												</div><!-- /.product-image -->
												<div class="product-info text-left">
													<h3 class="name">
														<a href="{!! $producto->titleClean.'/'.$producto->models->brands->nameClean.'/'.$producto->models->nameClean.'/'.$producto->id !!}">{{$producto->Models->name}}</a>
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
														<a href="{!! $producto->titleClean.'/'.$producto->models->brands->nameClean.'/'.$producto->models->nameClean.'/'.$producto->id !!}" class="btn btn-primary btn-xs" type="button">ver Detalles</a>
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