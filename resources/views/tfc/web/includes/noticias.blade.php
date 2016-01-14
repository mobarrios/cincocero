<div class="center-col">

  <center>
    <!-- breadcrumb -->
  </center>
  <div class="elements-box">

    <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
      <div id="contact-box">
        <div class="widget-area-3">
          <div class="widget punica-featured-news-widget">
            <h2 class="widget-title clearfix">
              <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
                <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
                <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
                  <h2>NOTICIAS</h2>
                </div>
              </div>
              {{--<img src="{{asset('assets/web/images/tabla_pos.png')}}" width="600" height="70" alt=""/>--}}
            </h2>
            <!-- punica-featured-news-slider -->
            <div class="masonry-wrapper">
              <ul class="punica-entry-list clearfix">

                  @foreach($noticias as $noticia)

                  <li class="element">
                  <article class="entry-item">
                    <div class="entry-thumb hover-effect"> <a href="#"><img src="{{asset($noticia->images->first()->image)}}" alt="" /></a> </div>
                    <!-- entry-thumb -->
                    <div class="entry-content">
                      <header> <span class="entry-date">{{ date('F d, Y', strtotime($noticia->date)) }}</span> </header>
                      <h6 class="entry-title"><a href="#">{{$noticia->title}}</a></h6>
                      <p>{!! $noticia->detail !!}</p>
                    </div>
                    <!-- entry-content -->
                  </article>
                  <!-- entry-item -->
                </li>

                  @endforeach

              <!-- punica-entry-list -->

               {!! $noticias->render() !!}
                <!--page-numbers-->

              <!-- pagination -->
            </div>
            <!-- older-post -->
          </div>
          <!-- punica-featured-news-widget -->
          <!-- punica-entry-list-2-widget -->
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div id="response"></div>
      </div></div>
    <p>&nbsp;</p>
    <center><!-- row --></center>
    <!-- row --><!-- row --><!-- row -->

    <div class="row"></div>
    <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

  </div>
  <!-- elements-box -->

</div>
<!-- center-col -->