@extends('motonet/web/template')

@section('content')
    @include('motonet/web/includes/slider')

    <section id="destacados" class="gray-section contact">
        <div class="col-xs-12" >
            <img class="img-responsive center-block" src="http://www.todopago.com.ar/sites/todopago.com.ar/files/kit_banner_promocional_728x90.jpg" alt="" />
        </div>

        <div class="container">

            <h1>Destacados</h1>


                @foreach($publications as $publication)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="ibox-title">

                                <img class="thumbnail img-rounded img-responsive" src="{{$publication->Models->Brands->Images->first()->image }}" width="60" height="60">

                            </div>
                            <div class="product-imitation">
                                <img src="{{$publication->Models->Images->first()->image}}  " alt="foto">
                            </div>

                            <div class="product-desc">
                                    <span class="product-price">
                                        ${{$publication->price}}
                                    </span>
                                <small class="text-muted">{{$publication->Models->name}}</small>
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

        @include('motonet/web/index/accesorios')
        @include('motonet/web/index/seguro')
        @include('motonet/web/index/servicioTecnico')
        @include('motonet/web/index/metodosDePagos')


    </section>
@endsection
