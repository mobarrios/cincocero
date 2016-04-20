@extends('motonet/web/template')

@section('css')
    <link href="assets/inspinia/css/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/slick/slick-theme.css" rel="stylesheet">
    <style>
        .btn-group .btn-primary{
            background-color: #0187CE;
            border-color: #0187CE;
            color: #FFFFFF;
            font-size: 12px;
            padding: 5px 10px;
            font-weight: inherit;
        }

    </style>
@endsection

@section('content')

<div >
    <div class="gray-bg">
        @include('motonet/web/includes/breadcrumbs')

        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="product-images">
                                        @if($item->Models->Images->count() != 0)
                                            @foreach($item->Models->Images as $img)
                                                <div>
                                                    <div class="image-imitation">
                                                        <a href="{!! $img->image !!}">
                                                            <img src="{!! $img->image !!}" alt="{!! $item->name !!}">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div>
                                                <div class="image-imitation">
                                                    [SIN IMÁGEN]
                                                </div>
                                            </div>
                                        @endif

                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        {!! $item->name !!}
                                    </h2>
                                    <small>{!! $item->code !!}
                                        <br></small>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price">{!! $item->sell_price !!}</h2>
                                    </div>
                                    <hr>

                                    @if($item->description != "")
                                        <h4>Descripción</h4>

                                        <div class="small text-muted">
                                            {!! $item->description !!}
                                        </div>
                                    @endif
                                    <h4>{!! $item->Brands->name !!}</h4>

                                    <div class="small text-muted">
                                        {!! $item->Models->name!!}
                                    </div>
                                    <dl class="small m-t-md">
                                        @if($item->total_weight != "")
                                            <dt>Peso total: {!! $item->total_weight !!}</dt>
                                        @endif
                                        @if($item->maximum_weight != "")
                                            <dt>Peso máximo: {!! $item->maximum_weight!!}</dt>
                                        @endif
                                        @if($item->size != "")
                                            <dt>Tamaño: {!! $item->size!!}</dt>
                                        @endif
                                        @if($item->dimensions!= "")
                                            <dt>Tamaño: {!! $item->dimensions!!}</dt>
                                        @endif
                                        @if($item->presentation!= "")
                                            <dt>Tamaño: {!! $item->presentation!!}</dt>
                                        @endif
                                        @if($item->bodega!= "")
                                            <dt>Tamaño: {!! $item->bodega!!}</dt>
                                        @endif
                                        @if($item->observaciones!= "")
                                            <dt>Tamaño: {!! $item->observaciones!!}</dt>
                                        @endif
                                    </dl>
                                    <hr>

                                    <div>
                                        <div class="btn-group">
                                            <a class="btn btn-primary btn-sm" href="{!! route('resumen',$item->id) !!}"> Comprar</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        {{--<div class="ibox-footer">--}}
                            {{--<span class="pull-right">--}}
                                {{--Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm--}}
                            {{--</span>--}}
                            {{--The generated Lorem Ipsum is therefore always free--}}
                        {{--</div>--}}
                    </div>

                </div>
            </div>
           




        </div>

    </div>
</div>

@endsection

@section('js')
<!-- slick carousel-->
<script src="assets/inspinia/js/plugins/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){


        $('.product-images').slick({
            dots: true
        });

    });

</script>

@endsection
