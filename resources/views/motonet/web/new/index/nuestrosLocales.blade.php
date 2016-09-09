<section class="section outer-bottom-vs wow fadeInUp" id="sucursales">
    <h3 class="section-title">Puntos de entrega</h3>
    <div class="blog-slider-container outer-top-xs">
        <div class="owl-carousel blog-slider custom-carousel">

            @foreach($branches as $branch)
                <div class="item text-center">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image">
                                <a href="blog.html"><img data-echo="{{$branch->images->first()->image or ''}}" width="270" height="135" src="{{$branch->images->first()->image or ''}}" alt=""></a>
                            </div>
                        </div><!-- /.blog-post-image -->

                        <div class="blog-post-info ">
                            <h3 class="name"><a href="#">{{$branch->name}}</a></h3>
                            <span class="info">{{$branch->address}}</span>
                            <p class="text"></p>
                            <a href="" >
                                <span class="icon fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </div><!-- /.blog-post-info -->


                    </div><!-- /.blog-post -->
                </div><!-- /.item -->
            @endforeach


        </div><!-- /.owl-carousel -->
    </div><!-- /.blog-slider-container -->
</section><!-- /.section -->