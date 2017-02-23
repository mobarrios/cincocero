@extends('motonet.web.new.templateNuevo2')

@section('DataLayers')
    @if(\Illuminate\Support\Facades\Session::has('fbq'))
        <script type="text/javascript">

            dataLayer = {
                "page": {
                    "type": "purchase" // Tipo de página (product, cart, purchase) --> purchase debe ir cuando la compra fue concretada
                },
                "product": {
                    "id": "{!! $publication->id !!}", // ID de producto, obligatorio
                    "brand": "{!! $publication->Models->Brands->name !!}", // Marca del producto (Zanella, Honda, etc)
                    "category": "{!! $publication->Models->Categories->first()->name !!}", // Categoría del producto (Motos, Scooters, Customs, etc)
                    "name": "{!! $publication->Models->name !!}", // Nombre del producto
                    "price": "{!! $publication->price !!}" // Precio del producto
                }
            }
        </script>
    @else
        <script type="text/javascript">

            dataLayer = {
                "page": {
                    "type": "cart" // Tipo de página (product, cart, purchase) --> purchase debe ir cuando la compra fue concretada
                },
                "product": {
                    "id": "{!! $publication->id !!}", // ID de producto, obligatorio
                    "brand": "{!! $publication->Models->Brands->name !!}", // Marca del producto (Zanella, Honda, etc)
                    "category": "{!! $publication->Models->Categories->first()->name !!}", // Categoría del producto (Motos, Scooters, Customs, etc)
                    "name": "{!! $publication->Models->name !!}", // Nombre del producto
                    "price": "{!! $publication->price !!}" // Precio del producto
                }
            }
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
                    <a data-toggle="collapse" class="" id="TuCompra" data-parent="#accordion" href="#collapseOne">
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
                                    <a href="{!! route('productDetail',[$publication->models->nameClean,$publication->id]) !!}" class="text-navy">
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
                    <a data-toggle="collapse" id="FormasDePago" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                        <span>2</span>Formas de Pago
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <div class="ibox h-auto">

                        {!! Form::open(['url'=>'pay','method'=>'get','id' => 'form-pay'])!!}

                        <div class="ibox-content">
                            <h3>Total</h3>
                            @foreach($publication->PayMethod as $pm)
                                <label><input required="required" type="radio" name="pay_method" value="{{$pm->method}}_{{$publication->price + ($publication->price * $pm->porcent) /100 }}" > {{$pm->method}}
                                    {{--{{$pm->modality}}--}}
                                    @if($pm->modality != "")
                                        {{--de--}}
                                        <strong>$ {!! round((intval($publication->price + ($publication->price * $pm->porcent) /100))) !!}
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
                                    <input required="required" type="radio" name="pay_method" value="{{$pm->method}}_{{round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)+ (round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) * $pm->porcent) /100}}" > {{$pm->method}}
                                    {{--{{$pm->modality}}--}}
                                    @if($pm->modality != "")
                                        {{--de --}}
                                        <strong>
                                            $ {!! round((round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP)+ (round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) * $pm->porcent) /100)) !!}
                                            {{--/ (intval(str_replace(" cuotas","",$pm->modality))),2,PHP_ROUND_HALF_UP)--}}
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
                    <a data-toggle="collapse" id="DatosPersonales" class="collapsed" data-parent="#accordion" href="#collapseThree">
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

@section('js')

    <script>
        $('#form-pay').on('submit',function(ev){
            ev.preventDefault()

            var submit1 = false;
            var submit2 = false;

            var inputs = [];

            $.each($(".input-string"),function(ind,element){
                if(! element.value.match(/^[a-zñáéíóúüäö]{3,}$/ig)){
                    $(element).parent().addClass('has-error')

                    submit1 = false;
                    inputs[$(element).attr('placeholder')] = 'texto'

                }else{
                    if($(element).parent().hasClass('has-error'))
                        $(element).parent().removeClass('has-error')

                    submit1 = true;
                }
            })

            $.each($(".input-num"),function(ind,element){
                if(! element.value.match(/^[0-9]{7,}$/ig)){
                    $(element).parent().addClass('has-error')

                    submit2 = false
                    inputs[$(element).attr('placeholder')] = 'numérico'

                }else{
                    $(element).parent().removeClass('has-error')

                    submit2 = true;
                }
            })


            if(submit1 == false || submit2 == false){
                if($("div.alert")){
                    $("div.alert").remove()
                }

                $('body').append($('<div style="position:fixed; bottom:0; left: 0;" class="col-xs-12 alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button><ul></ul></div>'))

                for(var i in inputs)
                    $('div.alert>ul').append($('<li> El campo '+ i +' debe ser '+ inputs[i] +'</li>'))


                inputs.length = 0;

                return false
            }else{
                this.submit()
            }
        })
    </script>

@endsection
