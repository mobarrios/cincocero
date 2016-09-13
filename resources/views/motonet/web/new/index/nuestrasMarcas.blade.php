<div id="brands-carousel" class="logo-slider wow fadeInUp">

    <h3 class="section-title">Nuestras Marcas</h3>
    <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">


            @foreach($brands as $brand)
                <div class="item m-t-15">
                    <a  class="image" href="{!! 'brand/'.$brand->name.'/'.$brand->id !!}">
                        <img style="width: 100px;" class="img-responsive byn center-block" src="{{$brand->images->first()->image or ''}}" alt="">
                    </a>
                </div><!--/.item-->
            @endforeach

        </div><!-- /.owl-carousel #logo-slider -->
    </div><!-- /.logo-slider-inner -->

</div><!-- /.logo-slider -->