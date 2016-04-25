@extends('motonet/web/template')

@section('content')

    <div class="gray-bg">
        @include('motonet/web/includes/breadcrumbs')
        <div class="pt-30">
            @if(!empty($items))
                @foreach($items as $i)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div class="product-imitation">
                                    <img src="{!! $i->Models->Images->first()->image or '' !!}" alt="{!! $i->name !!}">
                                </div>
                                <div class="product-desc">
                                    <span class="product-price">
                                        {!! $i->sell_price !!}
                                    </span>
                                    <small class="text-muted">
                                        Categorías:
                                        @foreach($i->Categories as $c)
                                            {!! $c->name !!}-
                                        @endforeach
                                    </small>
                                    <h2 class="product-name"> Marca: {!! $i->Brands->name !!}</h2>
                                    <h2 class="product-name"> Modelo: {!! $i->Models->name !!}</h2>

                                    <div class="m-t text-righ">
                                        <a href="{!! route('productDetail',$i->id) !!}" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2> Sin resultados </h2>
            @endif
        </div>
    </div>

@endsection
