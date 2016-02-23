@extends('tfc/web/template')
  @section('content')
      @include('tfc/web/leftbar/leftbar')
      <div class="center-col">
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                  <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
                    <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
                    <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
                      <h2>FAIR PLAY</h2>
                    </div>
                  </div>
                  {{--<p><img src="assets/web/images/fair_play.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="active">Posicion</td>
                      <td colspan="2" align="center" class="active">Equipo</td>
                      <td colspan="2" align="center" class="active"><img src="assets/web/images/roja.png" width="20" height="26" alt=""/></td>
                      <td colspan="2" align="center" class="active"><img src="assets/web/images/amarilla.png" width="20" height="26" alt=""/></td>
                      <td colspan="2" align="center" class="active">Pts</td>
                    </tr>

                    @if(count($fairPlay) == 0)
                      @include('tfc/web/includes/sinDatos')
                    @else
                      @foreach($fairPlay as $ind => $f)
                        <tr>
                          <td colspan="2" align="center" class="active">{!! $ind+1 !!}</td>
                          <td colspan="2" align="center" class="active">{!! $f->name !!}</td>
                          <td colspan="2" align="center" class="active">{!! $f->red !!}</td>
                          <td colspan="2" align="center" class="active">{!! $f->yellow !!}</td>
                            <td colspan="2" align="center" class="active">{{ $f->puntos }}</td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>
        <!-- center-col -->
      @include('tfc/web/sidebar/sidebar')
    @endsection