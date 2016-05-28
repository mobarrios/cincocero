@extends('motonet/web/template')

@section('css')
    <style>
        html,body{
            height:100%;
        }

        body.landing-page{
            height:100%;
        }

        footer{
            position: inherit !important;
        }

        .btn-group .btn-primary{
            background-color: #0187CE;
            border-color: #0187CE;
            color: #FFFFFF;
            font-size: 12px;
            padding: 5px 10px;
            font-weight: inherit;
        }

    </style>

    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/fontello-ie7.css">
    <link rel="stylesheet" href="assets/css/fontello-ie7-codes.css">
@endsection

@section('content')


    <div class="gray-bg">
        @include('motonet/web/includes/breadcrumbs')

        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-xs-9">


                    @if($errors->any())
                        <div class="alert alert-success">
                            @foreach($errors->all() as $error)
                                <p class="error">{{$error}}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Tu compra</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table shoping-cart-table">

                                    <tbody>
                                    <tr>
                                        <td width="90">
                                            <div class="cart-product-imitation">
                                                <img src="{!! $publication->Models->Images->first()->image or ''!!}" alt="{!! $publication->title !!}" class="img-responsive">
                                            </div>
                                        </td>
                                        <td class="desc col-xs-11">
                                            <h3>
                                                <a href="{!! route('productDetail',$publication->id) !!}" class="text-navy">
                                                    {!! $publication->title !!}
                                                </a>
                                            </h3>
                                            <dl class="small m-b-none">
                                                <dt>Descripción</dt>
                                                <h4><strong>{!! $publication->Models->Brands->name !!}</strong> - {!! $publication->Models->name !!}</h4>
                                            </dl>
                                        </td>

                                        <td>
                                            <h4>
                                                Precio
                                            </h4>
                                            <h4>
                                                ${!! $publication->price !!}
                                            </h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Importe</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="col-xs-6">
                                <span>
                                    Total
                                </span>
                                <h2 class="font-bold">
                                    ${!! $publication->price !!}
                                </h2>
                            </div>
                            <div class="col-xs-6">
                                <span>
                                    Seña
                                </span>
                                <h2>
                                    ${!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)!!}
                                </h2>
                            </div>

                            <hr/>
                            <span class="text-muted small">
                                *Verifique el pedido y los montos antes de terminar el pago.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-9">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h3>Formas de Pago</h3>
                        </div>
                        {!! Form::open(['url'=>'pay','method'=>'get'])!!}

                        <div class="ibox-content">
                            <h3>Total</h3>
                            @foreach($publication->PayMethod as $pm)
                                    <input required="required" type="radio" name="pay_method" value="{{$pm->method}}_{{$publication->price + ($publication->price * $pm->porcent) /100 }}"> {{$pm->method}} {{$pm->modality}} <strong> $ {{$publication->price + ($publication->price * $pm->porcent) /100}}  </strong><br>
                            @endforeach

                            <hr>
                            <h3>Seña</h3>
                            @foreach($publication->PayMethod as $pm)
                                <input required="required" type="radio" name="pay_method" value="{{$pm->method}}_{{round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)+ (round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) * $pm->porcent) /100}}" > {{$pm->method}} {{$pm->modality}} <strong> $ {{round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)+ (round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) * $pm->porcent) /100}}  </strong><br>
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="col-xs-3">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Soporte</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h3><i class="fa fa-phone"></i> 0810-333-6686 </h3>
                                <span class="small">
                                    Si algo no salió bien, podes contactarnos.
                                </span>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-xs-9">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h3>Datos Personales</h3>
                        </div>
                        <div class="ibox-content">
                            <div class="row">

                                    @include('motonet.web.payment.form_pago')

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
