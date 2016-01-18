@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <div class="center-col">
            
           <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
                        <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
                        <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
                            <h2>GOLEADORES DEL CAMPEONATO</h2>
                        </div>
                    </div>
                  {{--<p><img src="assets/web/images/goleador.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="warning">Posicion</td>
                      <td colspan="2" align="center" class="warning">Jugador</td>
                      <td colspan="2" align="center" class="warning">Equipo</td>
                      <td colspan="2" align="center" class="warning">Goles</td>
                    </tr>
                    @foreach($matches as $m)
                        @foreach($m->matchesDetails as $detalle)

                            {{$detalle->groupBy('players_id')->get()}}

                            <tr>
                          <td colspan="2" align="center">1</td>
                          <td colspan="2" align="center">{!! $detalle->players->FullName() !!}</td>
                          <td colspan="2" align="center">{!! $detalle->players->teams->name !!}</td>
                          <td colspan="2" align="center">{!! $detalle->goals !!} goles</td>
                        </tr>

                        @endforeach
                    @endforeach
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