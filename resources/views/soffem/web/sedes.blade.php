<div class="row m-b-lg">
    <div class="col-lg-12 text-center">
        <div class="navy-line"></div>
        <h1><span class="navy">SEDES</span></h1>
        {{--<p>Primera división</p>--}}
    </div>
</div>

    <section id="sedes" class="container features">
        <div class="col-xs-12">
            <div class="slick_demo_2">
                @foreach($sedes as $sede)
                    <a href="{!! route('sedesDetail',$sede->id) !!}" class="hover">
                        <div>
                            <img src="{!! $sede->Images->first()->image or "" !!}" alt="{!! $sede->name !!}" class="img-responsive">
                            <div class="caption p0">
                                 <h4 class="text-center mt-0 fs15 text-primary">{!! $sede->name !!}</h4>
                            </div>
                        </div>
                    </a>
                @endforeach
                <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>
            </div>
        </div>

    </section>

