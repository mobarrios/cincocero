@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <div class="center-col">
            
           <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div class="categoria-container titulo-categoria" style="border-bottom-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif">
                        <div class="color-top" style="background-color: @if($categoriaActual){{$categoriaActual->color_top}}@else{{'#0f5128'}}@endif;"></div>
                        <div class="color-bottom" style="background-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif;">
                            <h2>GOLEADOR DEL CAMPEONATO</h2>
                        </div>
                    </div>
                  {{--<p><img src="assets/web/images/goleador.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped table-responsive">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="warning">Jugador</td>
                      <td colspan="2" align="center" class="warning">Equipo</td>
                      <td colspan="2" align="center" class="warning">Goles</td>
                    </tr>
                    @if(empty($goleadores))
                        @include('tfc/web/includes/sinDatos')
                    @else
                        @foreach($goleadores as $ind => $g)
                            <tr>
                              <td colspan="2" align="center">{!! $g->players !!}</td>
                              <td colspan="2" align="center">{!! $g->teams !!}</td>
                              <td colspan="2" align="center">{!! $g->goals !!} goles</td>
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