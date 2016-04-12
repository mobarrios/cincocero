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
                                                <img src="assets/web/img/cuatri.png" alt="cuatri" class="img-responsive">
                                            </div>
                                        </td>
                                        <td class="desc col-xs-11">
                                            <h3>
                                                <a href="{!! route('productDetail') !!}" class="text-navy">
                                                    Cuatriciclo BKS 500 4×4
                                                </a>
                                            </h3>
                                            <dl class="small m-b-none">
                                                <dt>Descripción</dt>
                                                <dd>Linhai se ha posicionado en el mercado como una de las mejores marcas de Cuatriciclos de alta gama. Con presencia en casi todo el mundo, es Nro 1 en ventas en países muy exigentes y competitivos como Francia y Alemania.</dd>
                                            </dl>
                                        </td>

                                        <td>
                                            <h4>
                                                Precio
                                            </h4>
                                            <h4>
                                                $14106
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
                            <h5>Cart Summary</h5>
                        </div>
                        <div class="ibox-content">
                            <span>
                                Total
                            </span>
                            <h2 class="font-bold">
                                $14106
                            </h2>

                            <hr/>
                            <span class="text-muted small">
                                *For United States, France and Germany applicable sales tax will be applied
                            </span>
                        </div>
                    </div>

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Soporte</h5>
                        </div>
                        <div class="ibox-content text-center">



                            <h3><i class="fa fa-phone"></i> +54 100 783 001</h3>
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
                                                <strong>Expiry date:</strong> 10/16
                                            </small>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small>
                                                <strong>Name:</strong> David Williams
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="payment-card">
                                    <i class="fa fa-cc-mastercard payment-icon-big text-warning"></i>
                                    <h2>
                                        **** **** **** 7002
                                    </h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>
                                                <strong>Expiry date:</strong> 10/16
                                            </small>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small>
                                                <strong>Name:</strong> Anna Smith
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="payment-card">
                                    <i class="fa fa-cc-discover payment-icon-big text-danger"></i>
                                    <h2>
                                        **** **** **** 3466
                                    </h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>
                                                <strong>Expiry date:</strong> 10/16
                                            </small>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small>
                                                <strong>Name:</strong> Morgan Stanch
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
                                                <div class="pull-right">
                                                    <i class="fa fa-cc-paypal text-success"></i>
                                                </div>
                                                <h5 class="panel-title">
                                                    <a aria-expanded="false" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Mercadopago</a>
                                                </h5>
                                            </div>
                                            <div style="height: 0px;" aria-expanded="false" id="collapseOne" class="panel-collapse collapse">
                                                <div class="panel-body">

                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <h2>Summary</h2>
                                                            <strong>Product:</strong>: Name of product <br>
                                                            <strong>Price:</strong>: <span class="text-navy">$452.90</span>

                                                            <p class="m-t">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat.

                                                            </p>

                                                            <a class="btn btn-success">
                                                                <i class="fa fa-cc-paypal">
                                                                    Purchase via PayPal
                                                                </i>
                                                            </a>

                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="pull-right">
                                                    <i class="fa fa-cc-amex text-success"></i>
                                                    <i class="fa fa-cc-mastercard text-warning"></i>
                                                    <i class="fa fa-cc-discover text-danger"></i>
                                                </div>
                                                <h5 class="panel-title">
                                                    <a class="" aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Credit Card</a>
                                                </h5>
                                            </div>
                                            <div style="" aria-expanded="true" id="collapseTwo" class="panel-collapse collapse in">
                                                <div class="panel-body">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h2>Summary</h2>
                                                            <strong>Product:</strong>: Name of product <br>
                                                            <strong>Price:</strong>: <span class="text-navy">$452.90</span>

                                                            <p class="m-t">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat.

                                                            </p>
                                                            <p>
                                                                Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                                nulla pariatur. Excepteur sint occaecat cupidatat.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-8">

                                                            <form role="form" id="payment-form">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>CARD NUMBER</label>
                                                                            <div class="input-group">
                                                                                <input class="form-control" name="Number" placeholder="Valid Card Number" required="" type="text">
                                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-7 col-md-7">
                                                                        <div class="form-group">
                                                                            <label>EXPIRATION DATE</label>
                                                                            <input class="form-control" name="Expiry" placeholder="MM / YY" required="" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                                        <div class="form-group">
                                                                            <label>CV CODE</label>
                                                                            <input class="form-control" name="CVC" placeholder="CVC" required="" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>NAME OF CARD</label>
                                                                            <input class="form-control" name="nameCard" placeholder="NAME AND SURNAME" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <button class="btn btn-primary" type="submit">Make a payment!</button>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>






                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
