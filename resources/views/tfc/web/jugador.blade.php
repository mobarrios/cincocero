@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <!-- left-sidebar -->

        <div class="center-col">
            
            <div class="widget-area-3">

                <div class="widget punica-featured-news-widget">
                    <h2 class="widget-title clearfix">
                        <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
                            <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
                            <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
                                <h2>{!! $jugador->teams->name !!}</h2>
                            </div>
                        </div>
                        {{--<img src="{{asset('assets/web/images/tabla_pos.png')}}" width="600" height="70" alt=""/>--}}
                    </h2>
                    <!-- punica-featured-news-slider -->
                    <ul class="older-post clearfix">
                        <div class="row">
                          <p><br>
                            <br>
                            <br>
                          </p>
                          <div class="col-md-12 col-sm-12 mb-20">
                          <section class="about-author clearfix">
                            <div class="author-content">
                              <h5><a href="#"></a></h5>
                              <table width="100%" border="0">
                      <tbody>
                        <tr>
                          <td style="position: relative;" width="20%"><img style="position: absolute;top: 0;" src="{!! $jugador->images->first()->image or 'assets/web/images/playerDefault.jpg' !!}" width="141%" height="203" alt=""/></td>
                          <td width="8%">&nbsp;</td>
                          <td width="74%"><table width="100%">
                            <tbody>
                              <tr>
                                <td><p>{!! $jugador->FullName() !!}</p><p><strong>DNI:</strong> {!! $jugador->dni !!}</p></td>
                              </tr>
                              <tr>
                                <td><strong>Mail:</strong> {!! $jugador->mail !!}</td>
                              </tr>
                              <tr>
                                  <td><strong>Equipo:</strong> {!! $jugador->teams->name !!}</td>
                              </tr>
                              <tr>
                                  <td><img src="{!! $jugador->teams->images->first()->image or 'assets/web/images/teamDefault2.png' !!}" style="height:75px" ></td>
                              </tr>
                            </tbody>
                          </table></td>
                        </tr>
                      </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>  
                </div><!--author-content-->
                <div class="clear"></div>
            </section>
                          
                          <h6 class="elements-title">&nbsp;</h6>
                    </div>
                </div>
                        
                        
                    </ul>
                <!-- older-post --></h2>
                <!-- punica-featured-news-widget --><!-- punica-entry-list-2-widget -->

            </div>
            <!-- widget-area-3 --><!-- widget-area-12 --><!-- widget-area-13 --><!-- widget-area-14 -->

        </div>
        </div>
        <!-- center-col -->

    @include('tfc/web/sidebar/sidebar')
    @endsection