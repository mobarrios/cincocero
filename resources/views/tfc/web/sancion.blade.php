@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <div class="center-col">
            
            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div class="categoria-container titulo-categoria" style="border-bottom-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif">
                        <div class="color-top" style="background-color: @if($categoriaActual){{$categoriaActual->color_top}}@else{{'#0f5128'}}@endif;"></div>
                        <div class="color-bottom" style="background-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif;">
                            <h2>SANCION DE LA FECHA</h2>
                        </div>
                    </div>
                  <p>&nbsp;</p>
                </div>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped table-responsive">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="danger">Desde Fecha</td>
                      <td colspan="2" align="center" class="danger">Hasta Fecha</td>
                      <td colspan="2" align="center" class="danger">Equipo</td>
                      <td colspan="2" align="center" class="danger">Jugador</td>

                      <td colspan="2" align="center" class="danger">Motivo</td>
                    </tr>


                    @if(!is_null($fases))
                        @if(\App\Entities\tfc\Sanciones::count() == 0)
                            @include('tfc/web/includes/sinDatos')
                        @else

                            {{--@foreach($fases->sancion as $p)--}}
                                        {{--<tr>--}}
                                          {{--<td colspan="2" align="center" class="active">{!! $p->StartSancion->name!!}</td>--}}
                                          {{--<td colspan="2" align="center" class="active">{!! $p->EndSancion->name!!}</td>--}}
                                          {{--<td colspan="2" align="center" class="active">{!! $p->players->teams->name !!}</td>--}}
                                          {{--<td colspan="2" align="center" class="active">{!! $p->players->FullName() !!}</td>--}}

                                          {{--<td colspan="2" align="center" class="active">{!! $p->sancion!!}</td>--}}
                                        {{--</tr>--}}

                            {{--@endforeach--}}

                            @foreach(\App\Entities\tfc\Sanciones::get() as $p)
                                @if($p->EndSancion->name >= $faseWeekActual)
                                    <tr>
                                        <td colspan="2" align="center" class="active">{!! $p->StartSancion->name!!}</td>
                                        <td colspan="2" align="center" class="active">{!! $p->EndSancion->name!!}</td>
                                        <td colspan="2" align="center" class="active">{!! $p->players->teams->name !!}</td>
                                        <td colspan="2" align="center" class="active">{!! $p->players->FullName() !!}</td>

                                        <td colspan="2" align="center" class="active">{!! $p->sancion!!}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
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