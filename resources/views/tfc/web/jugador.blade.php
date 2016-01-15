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
                                <h2>{!! $jugador->teams->name !!}</h2></h2>
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
                          <td width="18%"><img src="{!! $jugador->images->first()->image !!}" width="141%" height="203" alt=""/></td>
                          <td width="8%">&nbsp;</td>
                          <td width="74%"><table width="100%">
                            <tbody>
                              <tr>
                                <td><p>{!! $jugador->FullName() !!}</p>
                                  <p><strong>Posición:</strong></p></td>
                              </tr>
                              <tr>
                                <td>Defensor</td>
                              </tr>
                              <tr>
                                <td><img src="http://www.velezsarsfield.com.ar/img/px.gif" height="6"></td>
                              </tr>
                              <tr>
                                <td height="9"><strong>Fecha de Nacimiento:</strong></td>
                              </tr>
                              <tr>
                                <td>20 de febrero de 1993</td>
                              </tr>
                              <tr>
                                <td><img src="http://www.velezsarsfield.com.ar/img/px.gif" height="6"></td>
                              </tr>
                              <tr>
                                <td height="9"><strong>Lugar de Nacimiento:</strong></td>
                              </tr>
                              <tr>
                                <td><img src="http://www.velezsarsfield.com.ar/img/ico/pais_sm_ar.gif" alt="Argentina" title="Argentina" align="top"><img src="http://www.velezsarsfield.com.ar/img/px.gif" alt="" width="5">Bariloche (Río Negro)</td>
                              </tr>
                              <tr>
                                <td><img src="http://www.velezsarsfield.com.ar/img/px.gif" height="6"></td>
                              </tr>
                              <tr>
                                <td><strong>Edad:</strong></td>
                              </tr>
                              <tr>
                                <td>22  años</td>
                              </tr>
                              <tr>
                                <td><img src="http://www.velezsarsfield.com.ar/img/px.gif" height="6"></td>
                              </tr>
                              <tr>
                                <td><strong>Altura:</strong></td>
                              </tr>
                              <tr>
                                <td>1.81 mts.</td>
                              </tr>
                              <tr>
                                <td><img src="http://www.velezsarsfield.com.ar/img/px.gif" height="6"></td>
                              </tr>
                              <tr>
                                <td><strong>Peso:</strong></td>
                              </tr>
                              <tr>
                                <td>78 kgs.</td>
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
                <!-- older-post --></div>
                <!-- punica-featured-news-widget --><!-- punica-entry-list-2-widget -->

            </div>
            <!-- widget-area-3 --><!-- widget-area-12 --><!-- widget-area-13 --><!-- widget-area-14 -->

        </div>
        <!-- center-col -->

    @include('tfc/web/sidebar/sidebar')
    @endsection