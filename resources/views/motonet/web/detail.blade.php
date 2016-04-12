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

                                        <div>
                                            <div class="image-imitation">
                                                [IMAGEN 1]
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation">
                                                [IMAGEN 2]
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation">
                                                [IMAGEN 3]
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        Cuatriciclo BKS 500 4×4
                                    </h2>
                                    <small>Blackstone trae a la Argentina los Cuatriciclos LINHAI –  Reconocidos a nivel Mundial.
                                        <br></small>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price">$14106</h2>
                                    </div>
                                    <hr>

                                    <h4>Descripción</h4>

                                    <div class="small text-muted">
                                        Linhai se ha posicionado en el mercado como una de las mejores marcas de Cuatriciclos de alta gama. Con presencia en casi todo el mundo, es Nro 1 en ventas en países muy exigentes y competitivos como Francia y Alemania.
                                    </div>
                                    <dl class="small m-t-md">
                                        <dt>Motor</dt>
                                        <dd>Monocilíndrico de 4 tiempos</dd>
                                        <dt>Cilindrada</dt>
                                        <dd>493.0 cc</dd>
                                        <dt>Potencia</dt>
                                        <dd>38 HP</dd>
                                        <dd>Velocidad</dd>
                                        <dt>95 km/h</dt>
                                    </dl>
                                    <hr>

                                    <div>
                                        <div class="btn-group">
                                            <a class="btn btn-primary btn-sm" href="{!! route('resumen') !!}"> Comprar</a>
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
