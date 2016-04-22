@extends('motonet/web/template')

@section('css')
    <link href="assets/inspinia/css/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="assets/css/imageModal.css" rel="stylesheet">
    <style>
        .btn-group .btn-primary{
            background-color: #0187CE;
            border-color: #0187CE;
            color: #FFFFFF;
            font-size: 12px;
            padding: 5px 10px;
            font-weight: inherit;
        }

        .panel3 .panel3-body a.zoom:hover span.overlay i{
            top: 44%;
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

                                        @if($item->Items->Images->count() != 0)
                                            @foreach($item->Items->Images as $img)
                                                <div class="panel3 panel-default">
                                                    <div class="panel3-body image-imitation">
                                                        <a href="{!! $img->image !!}" title="{!! $item->title !!}" class="zoom" data-title="{!! $item->title !!}" data-type="image" data-toggle="lightbox">
                                                            <img src="{!! $img->image !!}" alt="{!! $item->title !!}">
                                                            <span class="overlay"><i class="fa fa-arrows-alt"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div>
                                                <div class="image-imitation" style="height:300px">
                                                    <p style="text-align: center;padding: 30% 0">[SIN IMÁGEN]</p>
                                                </div>
                                            </div>
                                        @endif

                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        {!! $item->Items->name !!}
                                    </h2>
                                    <small>{!! $item->Items->code !!}
                                        <br></small>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price">{!! $item->Items->sell_price !!}</h2>
                                    </div>
                                    <hr>

                                    @if($item->description != "")
                                        <h4>Descripción</h4>

                                        <div class="small text-muted">
                                            {!! $item->description !!}
                                        </div>
                                    @endif
                                    <h4>{!! $item->Items->Brands->name !!}</h4>

                                    <div class="small text-muted">
                                        {!! $item->Items->Models->name!!}
                                    </div>
                                    <dl class="small m-t-md">
                                        @if($item->total_weight != "")
                                            <dt>Peso total: {!! $item->Items->total_weight !!}</dt>
                                        @endif
                                        @if($item->maximum_weight != "")
                                            <dt>Peso máximo: {!! $item->Items->maximum_weight!!}</dt>
                                        @endif
                                        @if($item->size != "")
                                            <dt>Tamaño: {!! $item->Items->size!!}</dt>
                                        @endif
                                        @if($item->dimensions!= "")
                                            <dt>Tamaño: {!! $item->dimensions!!}</dt>
                                        @endif
                                        @if($item->presentation!= "")
                                            <dt>Tamaño: {!! $item->Items->presentation!!}</dt>
                                        @endif
                                        @if($item->bodega!= "")
                                            <dt>Tamaño: {!! $item->Items->bodega!!}</dt>
                                        @endif
                                        @if($item->observaciones!= "")
                                            <dt>Tamaño: {!! $item->Items->observaciones!!}</dt>
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
<script src="//rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.js"></script>
<script src="assets/js/imageModal.js"></script>

<script>
    $(document).ready(function(){


        $('.product-images').slick({
            dots: true
        });

    });

</script>

@endsection
