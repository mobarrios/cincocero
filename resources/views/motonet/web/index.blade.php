@extends('motonet/web/template')

@section('content')
    @include('motonet/web/includes/slider')

    <section id="destacados" class="gray-section contact">
        <div class="container" >
            <img src="http://www.todopago.com.ar/sites/todopago.com.ar/files/kit_banner_promocional_728x90.jpg" alt="" />
        </div>

        <div class="container">

            <h1>Destacados</h1>


                @foreach($publications as $publication)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="ibox-title">

                                <img class="thumbnail img-rounded img-responsive" src="{{$publication->Items->Brands->Images->first()->image}}" width="60" height="60">

                            </div>
                            <div class="product-imitation">
                                <img src="{{$publication->Items->Images->first()->image}}" alt="foto">
                            </div>

                            <div class="product-desc">
                                    <span class="product-price">
                                        ${{$publication->price}}
                                    </span>
                                <small class="text-muted">{{$publication->Items->Categories->first()->name}}</small>
                                <h2 class="product-name"> {{$publication->title}}</h2>

                                <div class="m-t text-righ">
                                    <a href="{!! route('productDetail',$publication->id )!!}" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        <div class="container">

            <h1>Métodos de Pago</h1>

            <div class="col-xs-12">
                <a href="http://www.todopago.com.ar/promociones-vigentes">
                    <img src="http://www.todopago.com.ar/sites/todopago.com.ar/files/kit_banner_promocional_908x515_3.jpg" alt="" />
                </a>
            </div>

            </div>

        </div>
    </section>
@endsection
