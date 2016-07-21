<div id="inSlider2" class="carousel slide hidden-xs" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        @foreach(\App\Entities\motonet\Sliders::all() as $item)
            <div class="item">
                <div>
                    {{--<div class="carousel-caption">--}}
                        {{--<h1>Rouser<br/>--}}
                            {{--50% off</h1>--}}
                        {{--<p>Robustes y elegancia para ciudad.</p>--}}
                        {{--<p>--}}
                            {{--<a class="btn btn-lg btn-primary" href="#" role="button">VER</a>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    <div class="carousel-image wow zoomIn">
                        <img src="{!! $item->Images->first()->image !!}" class="img-responsive" alt="{!! $item->description !!}"/>
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back one"></div>

            </div>
        @endforeach
        {{--<div class="item">--}}
            {{--<div>--}}
                {{--<div class="carousel-image wow zoomIn">--}}
                    {{--<img src="assets/web/img/slides_marcas.jpg" class="img-responsive" alt="marcas"/>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="item">--}}
            {{--<div>--}}
                {{--<div class="carousel-image wow zoomIn">--}}
                    {{--<img src="assets/web/img/slides_nuevo_promocion.jpg" class="img-responsive" alt="promocion"/>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Set background for slide in css -->--}}

        {{--</div>--}}



    </div>
    <a class="left carousel-control" href="#inSlider2" role="button" data-slide="prev">
        <span class="arrows fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider2" role="button" data-slide="next">
        <span class="arrows fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

