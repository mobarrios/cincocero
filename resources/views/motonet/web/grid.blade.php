@extends('motonet/web/template')

@section('content')

    <div class="gray-bg">
        @include('motonet/web/includes/breadcrumbs')
        <div class="pt-30">
            @if($items->count() > 0)
                @foreach($items as $i)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div class="product-imitation">
<<<<<<< HEAD
                                    <img src="{!! $i->Models->Images->first()->image or '' !!}" alt="{!! $i->name !!}">
=======
                                    <img src="{!! $i->Items->Models->Images->first()->image or ''!!}" alt="{!! $i->title !!}">
>>>>>>> 17a90410c5c2861ecc0725516b1788c641c33c5c
                                </div>
                                <div class="product-desc">
                                    <span class="product-price">
                                        {!! $i->price !!}
                                    </span>
                                    <small class="text-muted">
                                        Categorías:
                                        @foreach($i->Items->Categories as $c)
                                            {!! $c->name !!}-
                                        @endforeach
                                    </small>
                                    <h2 class="product-name"> Marca: {!! $i->Items->Brands->name !!}</h2>
                                    <h2 class="product-name"> Modelo: {!! $i->Items->Models->name !!}</h2>

                                    <div class="m-t text-righ">
                                        <a href="{!! route('productDetail',$i->id) !!}" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center"> Sin resultados </h2>
            @endif
        </div>
    </div>

@endsection
