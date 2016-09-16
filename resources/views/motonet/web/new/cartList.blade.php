@extends('motonet.web.new.templateNuevo2')

@section('fbq')
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
@endsection


@section('sideContent')

<div class="row inner-bottom-sm">
    <div class="shopping-cart">
        <div class="col-md-12 col-sm-12 shopping-cart-table ">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>

                        <th colspan="5" class="cart-description item"> <span class="glyphicon glyphicon-shopping-cart"></span> Tú Compra</th>


                    </thead><!-- /thead -->

                    <tbody>


                        <?php
                                $publi = \App\Entities\motonet\Publications::find($cartList);
                        ?>

                        <tr>
                            <td class="cart-image">
                                <a class="entry-thumbnail" href="index.php?page=detail">
                                    <img style="width:200px;" src="{{$publi->Models->Images->first()->image}}" >
                                </a>
                            </td>
                            <td class="cart-product-name-info">
                                <h4 class="cart-product-description"><a href="index.php?page=detail">{{$publi->Models->Brands->name}}</a></h4>
                                <h4 class="cart-product-description"><a href="index.php?page=detail">{{$publi->Models->name}}</a></h4>
                            </td>
                            <td class="cart-product-quantity">
                                <div class="quant-input">
                                    <input type="text"  disabled value="1">
                                </div>
                            </td>
                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">$ {{$publi->price}}</span></td>
                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>

                        </tr>




                    </tbody><!-- /tbody -->
                </table><!-- /table -->
            </div>

            <hr>

            <div class="col-md-12 col-sm-12 cart-shopping-total">
                <table class="table table-stripped">
                    <thead>
                    <tr>
                        <th>
                            <div class="cart-grand-total">
                                Total<span class="inner-left-md">$ {{$carrito['precio']}}</span>
                                <a href="{!! route('resumenNueva',$publi->id) !!}"class="btn btn-danger pull-right">Realizar Pago</a>
                            </div>
                        </th>
                        <th>
                            <a href="{{route('index')}}"class="btn btn-block">Seguir Comprando</a>
                        </th>
                    </tr>
                    </thead><!-- /thead -->

                </table><!-- /table -->
            </div><!-- /.cart-shopping-total -->

    </div><!-- /.shopping-cart -->
</div>

@endsection