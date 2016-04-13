@extends('motonet/web/template')

@section('content')
    {{--@include('motonet/web/includes/slider')--}}

    <section id="destacados" class="gray-section contact">
        <div class="container">
            <h1>Destacados</h1>

            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">

                        <div class="product-imitation">
                            <img src="assets/web/img/cuatri.png" alt="foto">
                        </div>
                        <div class="product-desc">
                                <span class="product-price">
                                    $10200
                                </span>
                            <small class="text-muted">Categoría</small>
                            <h2 class="product-name"> Producto</h2>

                            <div class="small m-t-xs">
                                Many desktop publishing packages and web page editors now.
                            </div>
                            <div class="m-t text-righ">
                                <a href="{!! route('productDetail') !!}" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection