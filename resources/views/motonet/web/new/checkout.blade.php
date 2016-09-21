@extends('motonet.web.new.templateNuevo2')

@section('fbq')
    @if(\Illuminate\Support\Facades\Session::has('fbq'))
        <script>
            var contenido = "ViewContent";
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');

            fbq('init', '165095643906274');

            fbq('track', 'Purchase', {value: '{!! \Illuminate\Support\Facades\Session::get('fbq') !!}', currency: '$'});

        </script>
    @else
        <script>
            var contenido = "ViewContent";
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');

            fbq('init', '165095643906274');

            fbq('track', 'InitiateCheckout');

        </script>
    @endif
@endsection

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

                    <table class="table table-striped shoping-cart-table">

                        <tfoot>
                        <tr>
                            <td colspan="3">
                                <div class="ibox-content">
                                    <div class="col-xs-6 text-center">
                                        <span>
                                            Total
                                        </span>
                                            <h2 class="font-bold">
                                                ${!! $publication->price !!}
                                            </h2>
                                        </div>
                                        <div class="col-xs-6 text-center">
                                    <span>
                                        Seña
                                    </span>
                                        <h2>
                                            ${!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)!!}
                                        </h2>
                                    </div>

                                    <hr/>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-product-imitation">
                                    <img style="width: 100px;" src="{!! $publication->Models->Images->first()->image or ''!!}" alt="{!! $publication->title !!}" class="img-responsive">
                                </div>
                            </td>
                            <td>
                                <h3>
                                    <a href="detalle/{!! $publication->titleClean.'/'.$publication->models->brands->nameClean.'/'.$publication->models->nameClean.'/'.$publication->id !!}" class="text-navy">
                                        {!! $publication->title !!}
                                    </a>
                                </h3>
                                <dl >
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

                                <span class="text-muted small">
                                    *Verifique el pedido y los montos antes de terminar el pago.
                                </span>

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

                    <div class="ibox h-auto">

                        {!! Form::open(['url'=>'pay','method'=>'get'])!!}

                        <div class="ibox-content">
                            <h3>Total</h3>
                            @foreach($publication->PayMethod as $pm)
                                <label><input required="required" type="radio" name="pay_method" value="{{$pm->method}}_{{$publication->price + ($publication->price * $pm->porcent) /100 }}" > {{$pm->method}} {{$pm->modality}}
                                    @if($pm->modality != "")
                                        de <strong>$ {!! round((intval($publication->price + ($publication->price * $pm->porcent) /100)  / $pm->coutas),2,PHP_ROUND_HALF_UP) !!}
                                        </strong>
                                    @else
                                        <strong>$ {!! $publication->price + ($publication->price * $pm->porcent) /100 !!}
                                        </strong>
                                    @endif
                                </label><br>
                            @endforeach

                            {{--@foreach($publication->PayMethod as $pm)--}}
                            {{--<label>--}}
                            {{--<input required="required" type="radio" name="pay_method" value="{{$pm->method}}_{{$publication->price + ($publication->price * $pm->porcent) /100 }}"> {{$pm->method}} {{$pm->modality}} <strong> $ {{$publication->price + ($publication->price * $pm->porcent) /100}}  </strong></label><br>--}}
                            {{--@endforeach--}}

                            <hr>
                            <h3>Seña</h3>
                            @foreach($publication->PayMethod as $pm)
                                <label>
                                    <input required="required" type="radio" name="pay_method" value="{{$pm->method}}_{{round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)+ (round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) * $pm->porcent) /100}}" > {{$pm->method}} {{$pm->modality}}
                                    @if($pm->modality != "")
                                        de <strong>
                                            $ {!! round((round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)+ (round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) * $pm->porcent) /100) / (intval(str_replace(" cuotas","",$pm->modality))),2,PHP_ROUND_HALF_UP) !!}
                                    @else
                                                <strong>$ {!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)+ (round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) * $pm->porcent) /100!!}

                                    @endif
                                                </strong>
                                </label>
                                <br>
                            @endforeach
                        </div>
                    </div>

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
                    @include('motonet.web.new.payment.form_pago')
                </div>
            </div>
        </div>

    </div><!-- /.checkout-steps -->
</div>
    </div>

@endsection