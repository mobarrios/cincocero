@extends('motonet/web/template')
@section('css')
    <link href="assets/inspinia/css/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/slick/slick-theme.css" rel="stylesheet">
@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">

                <div class="ibox product-detail">
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-5">


                                <div role="toolbar" class="product-images slick-initialized slick-slider"><button style="display: block;" type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button">Previous</button>

                                    <div aria-live="polite" class="slick-list draggable"><div role="listbox" style="opacity: 1; width: 1655px; transform: translate3d(-331px, 0px, 0px);" class="slick-track"><div tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="-1" class="slick-slide slick-cloned">
                                                <div class="image-imitation">
                                                    [IMAGE 3]
                                                </div>
                                            </div><div aria-describedby="slick-slide00" role="option" tabindex="0" style="width: 331px;" aria-hidden="false" data-slick-index="0" class="slick-slide slick-current slick-active">
                                                <div class="image-imitation">
                                                    [IMAGE 1]
                                                </div>
                                            </div><div aria-describedby="slick-slide01" role="option" tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="1" class="slick-slide">
                                                <div class="image-imitation">
                                                    [IMAGE 2]
                                                </div>
                                            </div><div aria-describedby="slick-slide02" role="option" tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="2" class="slick-slide">
                                                <div class="image-imitation">
                                                    [IMAGE 3]
                                                </div>
                                            </div><div tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="3" class="slick-slide slick-cloned">
                                                <div class="image-imitation">
                                                    [IMAGE 1]
                                                </div>
                                            </div></div></div>




                                    <button style="display: block;" type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button">Next</button><ul role="tablist" style="display: block;" class="slick-dots"><li id="slick-slide00" aria-controls="navigation00" aria-selected="true" role="presentation" aria-hidden="false" class="slick-active"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">1</button></li><li id="slick-slide01" aria-controls="navigation01" aria-selected="false" role="presentation" aria-hidden="true"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">2</button></li><li id="slick-slide02" aria-controls="navigation02" aria-selected="false" role="presentation" aria-hidden="true"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">3</button></li></ul></div>

                            </div>
                            <div class="col-md-7">

                                <h2 class="font-bold m-b-xs">
                                    Desktop publishing software
                                </h2>
                                <small>Many desktop publishing packages and web page editors now.</small>
                                <div class="m-t-md">
                                    <h2 class="product-main-price">$406,602 <small class="text-muted">Exclude Tax</small> </h2>
                                </div>
                                <hr>

                                <h4>Product description</h4>

                                <div class="small text-muted">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is

                                    <br>
                                    <br>
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.
                                </div>
                                <dl class="small m-t-md">
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                </dl>
                                <hr>

                                <div>
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Add to cart</button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Contact with author </button>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}

                {{--<div class="ibox product-detail">--}}
                    {{--<div class="ibox-content">--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-md-5">--}}


                                {{--<div role="toolbar" class="product-images slick-initialized slick-slider"><button style="display: block;" type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button">Previous</button>--}}

                                    {{--<div aria-live="polite" class="slick-list draggable"><div role="listbox" style="opacity: 1; width: 1655px; transform: translate3d(-331px, 0px, 0px);" class="slick-track"><div tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="-1" class="slick-slide slick-cloned">--}}
                                                {{--<div class="image-imitation">--}}
                                                    {{--[IMAGE 3]--}}
                                                {{--</div>--}}
                                            {{--</div><div aria-describedby="slick-slide10" role="option" tabindex="0" style="width: 331px;" aria-hidden="false" data-slick-index="0" class="slick-slide slick-current slick-active">--}}
                                                {{--<div class="image-imitation">--}}
                                                    {{--[IMAGE 1]--}}
                                                {{--</div>--}}
                                            {{--</div><div aria-describedby="slick-slide11" role="option" tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="1" class="slick-slide">--}}
                                                {{--<div class="image-imitation">--}}
                                                    {{--[IMAGE 2]--}}
                                                {{--</div>--}}
                                            {{--</div><div aria-describedby="slick-slide12" role="option" tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="2" class="slick-slide">--}}
                                                {{--<div class="image-imitation">--}}
                                                    {{--[IMAGE 3]--}}
                                                {{--</div>--}}
                                            {{--</div><div tabindex="-1" style="width: 331px;" aria-hidden="true" data-slick-index="3" class="slick-slide slick-cloned">--}}
                                                {{--<div class="image-imitation">--}}
                                                    {{--[IMAGE 1]--}}
                                                {{--</div>--}}
                                            {{--</div></div></div>--}}




                                    {{--<button style="display: block;" type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button">Next</button><ul role="tablist" style="display: block;" class="slick-dots"><li id="slick-slide10" aria-controls="navigation10" aria-selected="true" role="presentation" aria-hidden="false" class="slick-active"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">1</button></li><li id="slick-slide11" aria-controls="navigation11" aria-selected="false" role="presentation" aria-hidden="true"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">2</button></li><li id="slick-slide12" aria-controls="navigation12" aria-selected="false" role="presentation" aria-hidden="true"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">3</button></li></ul></div>--}}

                            {{--</div>--}}
                            {{--<div class="col-md-7">--}}

                                {{--<h2 class="font-bold m-b-xs">--}}
                                    {{--Desktop publishing software--}}
                                {{--</h2>--}}
                                {{--<small>Many desktop publishing packages and web page editors now.</small>--}}
                                {{--<hr>--}}
                                {{--<div>--}}
                                    {{--<button class="btn btn-primary pull-right">Add to cart</button>--}}
                                    {{--<h1 class="product-main-price">$406,602 <small class="text-muted">Exclude Tax</small> </h1>--}}
                                {{--</div>--}}
                                {{--<hr>--}}
                                {{--<h4>Product description</h4>--}}

                                {{--<div class="small text-muted">--}}
                                    {{--It is a long established fact that a reader will be distracted by the readable--}}
                                    {{--content of a page when looking at its layout. The point of using Lorem Ipsum is--}}
                                    {{--that it has a more-or-less normal distribution of letters, as opposed to using--}}
                                    {{--'Content here, content here', making it look like readable English.--}}
                                    {{--<br>--}}
                                    {{--<br>--}}
                                    {{--There are many variations of passages of Lorem Ipsum available, but the majority--}}
                                    {{--have suffered alteration in some form, by injected humour, or randomised words--}}
                                    {{--which don't look even slightly believable.--}}
                                {{--</div>--}}
                                {{--<dl class="dl-horizontal m-t-md small">--}}
                                    {{--<dt>Description lists</dt>--}}
                                    {{--<dd>A description list is perfect for defining terms.</dd>--}}
                                    {{--<dt>Euismod</dt>--}}
                                    {{--<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>--}}
                                    {{--<dd>Donec id elit non mi porta gravida at eget metus.</dd>--}}
                                    {{--<dt>Malesuada porta</dt>--}}
                                    {{--<dd>Etiam porta sem malesuada magna mollis euismod.</dd>--}}
                                    {{--<dt>Felis euismod semper eget</dt>--}}
                                    {{--<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>--}}
                                {{--</dl>--}}
                                {{--<div class="text-right">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>--}}
                                        {{--<button class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Contact with author </button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="ibox-footer">--}}
                            {{--<span class="pull-right">--}}
                                {{--Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm--}}
                            {{--</span>--}}
                        {{--The generated Lorem Ipsum is therefore always free--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}




    </div>
@endsection


@section('js')
    <script src="assets/inspinia/js/plugins/slick/slick.min.js"></script>
@endsection