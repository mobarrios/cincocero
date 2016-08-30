<section class="section outer-bottom-vs wow fadeInUp" id="sucursales">
    <h3 class="section-title">Nuestros Locales</h3>
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

            <div class="item">
                <div class="blog-post">
                    <div class="blog-post-image">
                        <div class="image">
                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/2.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                        </div>
                    </div><!-- /.blog-post-image -->


                    <div class="blog-post-info text-left">
                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div><!-- /.blog-post-info -->


                </div><!-- /.blog-post -->
            </div><!-- /.item -->


            <div class="item">
                <div class="blog-post">
                    <div class="blog-post-image">
                        <div class="image">
                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/3.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                        </div>
                    </div><!-- /.blog-post-image -->


                    <div class="blog-post-info text-left">
                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div><!-- /.blog-post-info -->


                </div><!-- /.blog-post -->
            </div><!-- /.item -->


            <div class="item">
                <div class="blog-post">
                    <div class="blog-post-image">
                        <div class="image">
                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/4.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                        </div>
                    </div><!-- /.blog-post-image -->


                    <div class="blog-post-info text-left">
                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div><!-- /.blog-post-info -->


                </div><!-- /.blog-post -->
            </div><!-- /.item -->


            <div class="item">
                <div class="blog-post">
                    <div class="blog-post-image">
                        <div class="image">
                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/5.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                        </div>
                    </div><!-- /.blog-post-image -->


                    <div class="blog-post-info text-left">
                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div><!-- /.blog-post-info -->


                </div><!-- /.blog-post -->
            </div><!-- /.item -->


            <div class="item">
                <div class="blog-post">
                    <div class="blog-post-image">
                        <div class="image">
                            <a href="blog.html"><img data-echo="assets/unicase/images/blog-post/6.jpg" width="270" height="135" src="assets/unicase/images/blank.gif" alt=""></a>
                        </div>
                    </div><!-- /.blog-post-image -->


                    <div class="blog-post-info text-left">
                        <h3 class="name"><a href="#">Simple Blog demo from fashion web</a></h3>
                        <span class="info">By Jone Doe-22 april 2014 -03 comments</span>
                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div><!-- /.blog-post-info -->


                </div><!-- /.blog-post -->
            </div><!-- /.item -->


        </div><!-- /.owl-carousel -->
    </div><!-- /.blog-slider-container -->
</section><!-- /.section -->