@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <div class="center-col">
            
            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
                        <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
                        <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
                            <h2>SANCIONES DE LA FECHA</h2>
                        </div>
                    </div>
                  <p>&nbsp;</p>
                </div>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="danger">Fecha</td>
                      <td colspan="2" align="center" class="danger">Equipo</td>
                      <td colspan="2" align="center" class="danger">Jugador</td>
                      <td colspan="2" align="center" class="danger">Sancion</td>
                      <td colspan="2" align="center" class="danger">Motivo</td>
                    </tr>



                    @if($fases->Sancion->count() == 0)
                        @include('tfc/web/includes/sinDatos')
                    @else

                        @foreach($fases->sancion as $p)
                                    <tr>
                                        <td colspan="2" align="center" class="active">{!! $p->created_at!!} </td>
                                      <td colspan="2" align="center" class="active">{!! $p->players->teams->name !!}</td>
                                      <td colspan="2" align="center" class="active">{!! $p->players->FullName() !!}</td>
                                      <td colspan="2" align="center" class="active">{!! $p->end_fases_week_id!!}</td>
                                      <td colspan="2" align="center" class="active">{!! $p->sancion->sancion!!}</td>
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