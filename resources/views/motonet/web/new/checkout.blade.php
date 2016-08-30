@extends('motonet.web.new.templateNuevo2')

@section('sideContent')

    <div class="checkout-box inner-bottom-sm">
    <div class="col-md-12">
    <div class="panel-group checkout-steps" id="accordion">
        <!-- checkout-step-01  -->
        <div class="panel panel-default checkout-step-01">
            <!-- panel-heading -->
            <div class="panel-heading">
                <h4 class="unicase-checkout-title">
                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                        <span>1</span>TU COMPRA
                    </a>
                </h4>
            </div>
            <!-- panel-heading -->
            <div id="collapseOne" class="panel-collapse collapse in" style="">
                <!-- panel-body  -->
                <div class="panel-body">

                </div>
                <!-- panel-body  -->
            </div><!-- row -->
        </div>
        <!-- checkout-step-01  -->
        <!-- checkout-step-02  -->
        <div class="panel panel-default checkout-step-02">
            <div class="panel-heading">
                <h4 class="unicase-checkout-title">
                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                        <span>2</span>Formas de Pago
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- checkout-step-02  -->
        <!-- checkout-step-03  -->
        <div class="panel panel-default checkout-step-03">
            <div class="panel-heading">
                <h4 class="unicase-checkout-title">
                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                        <span>3</span>Datos Personales
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <div class="row">
                        <!-- guest-login -->
                        <div class="col-md-6 col-sm-6 guest-login">
                            <h4 class="checkout-subtitle">Checkout as a Guest or Register Login</h4>
                            <p class="text title-tag-line">Register with us for future convenience:</p>
                            <!-- radio-form  -->
                            <form class="register-form" role="form">
                                <div class="radio radio-checkout-unicase">
                                    <input id="guest" type="radio" name="text" value="guest" checked="">
                                    <label class="radio-button guest-check" for="guest">Checkout as Guest</label>
                                    <br>
                                    <input id="register" type="radio" name="text" value="register">
                                    <label class="radio-button" for="register">Register</label>
                                </div>
                            </form>
                            <!-- radio-form  -->
                            <h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
                            <p class="text title-tag-line ">Register with us for future convenience:</p>
                            <ul class="text instruction inner-bottom-30">
                                <li class="save-time-reg">- Fast and easy check out</li>
                                <li>- Easy access to your order history and status</li>
                            </ul>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Continue</button>
                        </div>
                        <!-- guest-login -->
                        <!-- already-registered-login -->
                        <div class="col-md-6 col-sm-6 already-registered-login">
                            <h4 class="checkout-subtitle">Already registered?</h4>
                            <p class="text title-tag-line">Please log in below:</p>
                            <form class="register-form" role="form">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="admin@gadgets.com">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="Password">
                                    <a href="#" class="forgot-password">Forgot your Password?</a>
                                </div>
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                            </form>
                        </div>
                        <!-- already-registered-login -->
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.checkout-steps -->
</div>
    </div>

@endsection