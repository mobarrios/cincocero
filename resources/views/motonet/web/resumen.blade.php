@extends('motonet/web/template')

@section('css')
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

    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/fontello-ie7.css">
    <link rel="stylesheet" href="assets/css/fontello-ie7-codes.css">
@endsection

@section('content')

<div >
    <div class="gray-bg">
        @include('motonet/web/includes/breadcrumbs')

        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-md-9">

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
                                                <img src="{!! $publication->Items->Models->Images->first()->image or ''!!}" alt="{!! $publication->title !!}" class="img-responsive">
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
                                                <h4><strong>{!! $publication->Items->Brands->name !!}</strong> - {!! $publication->Items->Models->name !!}</h4>
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
                <div class="col-md-3">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Pedido</h5>
                        </div>
                        <div class="ibox-content">
                            <span>
                                Total
                            </span>
                            <h2 class="font-bold">
                                ${!! $publication->price !!}
                            </h2>

                            <hr/>
                            <span class="text-muted small">
                                *Verifique el pedido y los montos antes de terminar el pago.
                            </span>
                        </div>
                    </div>

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
                <div class="wrapper wrapper-content animated fadeInRight">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-4">
                                <div class="payment-card">
                                    <i class="fa fa-cc-visa payment-icon-big text-success"></i>
                                    <h2>
                                        **** **** **** 1060
                                    </h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>
                                                <strong>Hasta:</strong> 10/16
                                            </small>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small>
                                                <strong>Nombre:</strong> Juan Perez
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="payment-card">
                                    <i class="fa fa-cc-mastercard payment-icon-big text-warning" style="color:#d82929"></i>
                                    <h2>
                                        **** **** **** 7002
                                    </h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>
                                                <strong>Hasta:</strong> 10/16
                                            </small>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small>
                                                <strong>Nombre:</strong> Juan Perez
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="payment-card">
                                    <i class="icon icon-naranja payment-icon-big text-danger" style="color:#ff7e00"></i>
                                    <h2>
                                        **** **** **** 3466
                                    </h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>
                                                <strong>Hasta:</strong> 10/16
                                            </small>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small>
                                                <strong>Nombre:</strong> Juan Perez
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="ibox">
                                <div class="ibox-title">
                                    Medios de pago
                                </div>
                                <div class="ibox-content">

                                    <div class="panel-group payments-method" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="pull-right" style="margin-top:-9px;">
                                                    <i class="icon icon-mp text-success"></i>
                                                </div>
                                                <h5 class="panel-title">
                                                    <a class="" aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Mercadopago</a>
                                                </h5>
                                            </div>
                                            <div style="" aria-expanded="true" id="collapseTwo" class="panel-collapse collapse in">
                                                <div class="panel-body">

                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <h2>Resumen</h2>
                                                            <strong>Producto:</strong>: {!! $publication->title !!} <br>
                                                            <strong>Precio:</strong>: <span class="text-navy">${!! $publication->price !!} </span>

                                                            <p class="m-t">
                                                                <strong>{!! $publication->Items->Brands->name !!}</strong> - {!! $publication->Items->Models->name !!}

                                                            </p>

                                                            <a class="btn btn-success">
                                                                Pagar
                                                            </a>

                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="panel panel-default">--}}
                                            {{--<div class="panel-heading">--}}
                                                {{--<div class="pull-right">--}}
                                                    {{--<i class="fa fa-cc-amex text-success"></i>--}}
                                                    {{--<i class="fa fa-cc-mastercard text-warning"></i>--}}
                                                    {{--<i class="fa fa-cc-discover text-danger"></i>--}}
                                                {{--</div>--}}
                                                {{--<h5 class="panel-title">--}}
                                                    {{--<a class="" aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Tarjeta de crédito</a>--}}
                                                {{--</h5>--}}
                                            {{--</div>--}}
                                            {{--<div style="" aria-expanded="true" id="collapseTwo" class="panel-collapse collapse in">--}}
                                                {{--<div class="panel-body">--}}

                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-4">--}}
                                                            {{--<h2>Resumen</h2>--}}
                                                            {{--<strong>Producto:</strong>: {!! $publication->name !!} <br>--}}
                                                            {{--<strong>Precio:</strong>: <span class="text-navy">{!! $publication->sell_price !!}</span>--}}

                                                            {{--<p class="m-t">--}}
                                                                {{--<strong>{!! $publication->Brands->name !!}</strong> - {!! $publication->Models->name !!}--}}
                                                                {{--@if($publication->description != "")--}}
                                                                    {{--<br>{!! $publication->description !!}--}}
                                                                {{--@endif--}}

                                                            {{--</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-8">--}}

                                                            {{--<form role="form" id="payment-form">--}}
                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-xs-12">--}}
                                                                        {{--<div class="form-group">--}}
                                                                            {{--<label>NÚMERO DE TARJETA</label>--}}
                                                                            {{--<div class="input-group">--}}
                                                                                {{--<input class="form-control" name="Number" placeholder="Valid Card Number" required="" type="text">--}}
                                                                                {{--<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-xs-7 col-md-7">--}}
                                                                        {{--<div class="form-group">--}}
                                                                            {{--<label>FECHA VENCIMIENTO</label>--}}
                                                                            {{--<input class="form-control" name="Expiry" placeholder="MM / YY" required="" type="text">--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-xs-5 col-md-5 pull-right">--}}
                                                                        {{--<div class="form-group">--}}
                                                                            {{--<label>CS</label>--}}
                                                                            {{--<input class="form-control" name="CS" placeholder="***" required="" type="text">--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-xs-12">--}}
                                                                        {{--<div class="form-group">--}}
                                                                            {{--<label>NOMBRE Y APELLIDO</label>--}}
                                                                            {{--<input class="form-control" name="nameCard" placeholder="NOMBRE Y APELLIDO" type="text">--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-xs-12">--}}
                                                                        {{--<button class="btn btn-primary" type="submit">Realizar pago!</button>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</form>--}}

                                                        {{--</div>--}}

                                                    {{--</div>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                </div>

                            </div>

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
