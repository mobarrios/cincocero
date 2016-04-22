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

                                        @if($publication->Images->count() != 0)
                                            @foreach($publication->Images as $img)
                                                <div class="panel3 panel-default">
                                                    <div class="panel3-body image-imitation">
                                                        <a href="{!! $img->image !!}" title="{!! $publication->title !!}" class="zoom" data-title="{!! $publication->title !!}" data-type="image" data-toggle="lightbox">
                                                            <img src="{!! $img->image !!}" alt="{!! $publication->title !!}">
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
                                        {!! $publication->title !!}
                                    </h2>
                                    <small>{!! $publication->Items->code !!}
                                        <br></small>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price">${!! $publication->price !!}</h2>
                                    </div>
                                    <hr>

                                    @if($publication->description != "")
                                        <h4>Descripción</h4>

                                        <div class="small text-muted">
                                            {!! $publication->description !!}
                                        </div>
                                    @endif
                                    <h4>{!! $publication->Items->Brands->name !!}</h4>

                                    <div class="small text-muted">
                                        {!! $publication->Items->Models->name!!}
                                    </div>
                                    <dl class="small m-t-md">
                                        @if($publication->Items->total_weight != "")
                                            <dt>Peso total: {!! $publication->Items->total_weight !!}</dt>
                                        @endif
                                        @if($publication->Items->maximum_weight != "")
                                            <dt>Peso máximo: {!! $publication->Items->maximum_weight!!}</dt>
                                        @endif
                                        @if($publication->Items->size != "")
                                            <dt>Tamaño: {!! $publication->Items->size!!}</dt>
                                        @endif
                                        @if($publication->Items->dimensions!= "")
                                            <dt>Tamaño: {!! $publication->dimensions!!}</dt>
                                        @endif
                                        @if($publication->Items->presentation!= "")
                                            <dt>Tamaño: {!! $publication->Items->presentation!!}</dt>
                                        @endif
                                        @if($publication->Items->bodega!= "")
                                            <dt>Tamaño: {!! $publication->Items->bodega!!}</dt>
                                        @endif
                                        @if($publication->Items->observaciones!= "")
                                            <dt>Tamaño: {!! $publication->Items->observaciones!!}</dt>
                                        @endif
                                    </dl>
                                    <hr>

                                    <div>
                                        <div class="btn-group">
                                            <a class="btn btn-primary btn-sm" href="{!! route('resumen',$publication->id) !!}"> Comprar</a>
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
