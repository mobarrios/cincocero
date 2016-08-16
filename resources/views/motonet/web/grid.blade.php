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
                                    @if($i->destacado_text != "")

                                        @if(strlen($i->destacado_text) <= 10 )
                                            <div>
                                                <span>{{$i->destacado_text}}</span>
                                            </div>
                                        @else
                                            <div class="line-height:4 px">
                                                <span style="font-size: 55%">{{$i->destacado_text}}</span>
                                            </div>
                                        @endif

                                    @endif
                                    <img src="{!! $i->Models->Images->first()->image or ''!!}" alt="{!! $i->title !!}">
                                </div>
                                <div class="product-desc">
                                    <span class="product-price">
                                        ${!! $i->price !!}
                                    </span>
                                    <small class="text-muted">
                                        Categorías:
                                        @foreach($i->Models->Categories as $c)
                                            {!! $c->name !!}-
                                        @endforeach
                                    </small>
                                    <h2 class="product-name"> Marca: {!! $i->Models->Brands->name !!}</h2>
                                    <h2 class="product-name"> Modelo: {!! $i->Models->name !!}</h2>

                                    <div class="m-t text-righ">
                                        <a href="{!! route('productDetail',$i->id) !!}" class="btn btn-xs btn-outline btn-primary">Ver más</a>
                                    </div>
                                    
                                </div>

                                @if($i->promo != "")
                                    <div class="p-md pb-5 pt-0">
                                @else
                                    <div class="p-md pt-0">
                                @endif

                                @if($i->salable == 1 && $i->payMethod->count() > 0)
                                    <hr class="m-t-none">
                                    <h4><span class="fa fa-credit-card"></span> Medios de pago</h4>

                                    @foreach($i->payMethod as $pagos)
                                        <div class="small text-muted">
                                            {{--<label class="label label-info mr-5">--}}
                                            <i class="fa fa-check child-info"></i>
                                            {{--</label>--}}
                                            {!! $pagos->method !!}  ( ${!! $i->price + ($i->price * $pagos->porcent) /100 !!}
                                            @if($pagos->coutas != "")
                                                - {!! $pagos->modality !!} de ${!! round((intval($i->price + ($i->price * $pagos->porcent) /100)  / $pagos->coutas),2,PHP_ROUND_HALF_UP) !!}
                                            @endif
                                            )
                                        </div>
                                    @endforeach
                                @endif

                                @if($i->promo != "")
                                    <hr class="m-t-sm m-b-none p-b-none">
                                    <h2 class="product-name child-success pt-5"> {{$i->promo}}</h2>
                                @endif
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
    <div class="clearfix"></div>
@endsection
