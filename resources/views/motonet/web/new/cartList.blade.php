@extends('motonet.web.new.templateNuevo2')

@section('sideContent')

<div class="row inner-bottom-sm">
    <div class="shopping-cart">
        <div class="col-md-12 col-sm-12 shopping-cart-table ">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>

                        <th colspan="5" class="cart-description item"> <span class="glyphicon glyphicon-shopping-cart"></span> Tú Compra</th>


                    </thead><!-- /thead -->
                    <tfoot>
                    <tr>
                        <td colspan="5">
                            <div class="shopping-cart-btn">
                                <span class="">
                                        <a href="#" class="btn btn-upper btn-primary outer-left-xs">Continuar Comprando</a>
                                </span>
                            </div><!-- /.shopping-cart-btn -->
                        </td>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($cartList as $cart)
                        <?php
                                $publi = \App\Entities\motonet\Publications::find($cart);
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


                    @endforeach

                    </tbody><!-- /tbody -->
                </table><!-- /table -->
            </div>

        <div class="pull-right col-md-6 col-sm-12 cart-shopping-total">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class=" cart-shopping-total">
                        <div class="cart-grand-total">
                            Total<span class="inner-left-md">$ {{$carrito['precio']}}</span>
                        </div>
                    </th>
                </tr>
                </thead><!-- /thead -->
                <tbody>
                <tr>
                    <td>
                        <div class="cart-checkout-btn pull-right">
                            <button type="submit" class="btn btn-primary">Realizar Pago</button>
                        </div>
                    </td>
                </tr>
                </tbody><!-- /tbody -->
            </table><!-- /table -->
        </div><!-- /.cart-shopping-total -->	</div><!-- /.shopping-cart -->
</div>

@endsection