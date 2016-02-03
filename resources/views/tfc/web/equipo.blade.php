@extends('tfc/web/template')
    @section("content")
      <div class="clear"></div>
        @include('tfc/web/leftbar/leftbar')
        <!-- left-sidebar -->

        <div class="center-col">
            
            <div class="widget-area-3">

                <div class="widget punica-featured-news-widget">
                    <h2 class="widget-title clearfix">
                        <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
                            <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
                            <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
                                <h2>LISTA DE JUGADORES</h2>
                            </div>
                        </div>
                    </h2>

                    <!-- punica-featured-news-slider -->
                    <ul class="older-post clearfix">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 mb-20">
                          <p><h2 class="widget-title clearfix"><img src="{!! $equipo->images->first()->image or 'assets/web/images/teamDefault2.png'!!}" width="35" height="35" alt=""/> {!! $equipo->name !!}</h2></p>
                              <br>
                          @if(count($equipo->images) > 1)
                            <img src="{!! $equipo->images->last()->image!!}" alt="" class="img-responsive col-xs-12">
                          @endif
                          <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                          <tbody>
                            <tr>
                              <td colspan="2" align="center" class="warning">Jugador</td>
                              <td colspan="2" align="center" class="warning">Amarillas</td>
                              <td colspan="2" align="center" class="warning">Rojas</td>
                              <td colspan="2" align="center" class="warning">Goles</td>
                            </tr>
{{--                            {!! dd($equipo->players->first()) !!}--}}
                            @foreach($equipo->players as $jugadores)
                                <tr>
                                  <td colspan="2" align="center"><a href="{!! route('jugador',[$jugadores->id,$faseActual->id]) !!}">{!! $jugadores->FullName() !!}</a></td>
                                  <td colspan="2" align="center">{!! $jugadores->Amarillas($jugadores->id)!!}</td>
                                  <td colspan="2" align="center">{!! $jugadores->Rojas($jugadores->id)!!}</td>
                                  <td colspan="2" align="center">{!! $jugadores->Goles($jugadores->id)!!} goles</td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
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